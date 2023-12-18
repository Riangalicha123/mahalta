<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AdminController extends Controller {
    public function __construct(){
        parent::__construct();
        $this->call->model('Usermodel_model');
        $this->call->model('Booking_model');
        $this->call->model('Feedback_model');
        $this->LAVA = lava_instance();
    }
	public function dashboard(){
        if (!$this->LAVA->is_logged_in()) {

            $this->session->set_flashdata('errors', ['Login First']);
            redirect('login');
            return;
            
        }

        $data = $this->Usermodel_model->getGuests();
        $this->call->view('Admin\index', $data);
    }
    public function guest(){
        if (!$this->LAVA->is_logged_in()) {

            $this->session->set_flashdata('errors', ['Login First']);
            redirect('login');
            return;
        }
        $data = $this->Usermodel_model->getUser();
        $this->call->view('Admin\guest', $data);
    }
    public function delete_guest($UserId){
        if(isset($UserId)){
            $this->db->table('users')->where("UserId",$UserId)->delete();
            redirect('admin-guest');
        }else{
            redirect('admin-guest');
        }
    }

    public function room(){
        if (!$this->LAVA->is_logged_in()) {

            $this->session->set_flashdata('errors', ['Login First']);
            redirect('login');
            return;
        }
        
        
        $this->call->view('Admin\room');
    }
    public function booking(){
        if (!$this->LAVA->is_logged_in()) {

            $this->session->set_flashdata('errors', ['Login First']);
            redirect('login');
            return;
        }
        $data['books'] = $this->Booking_model->book();

        $this->call->view('Admin\booking', $data);
    }
    public function is_logged_in() {
        // Assuming this method is checking if the user is logged in
        $isLogged = $this->LAVA->session->has_userdata('logged_in') && $this->LAVA->session->userdata('logged_in');
        return $isLogged;
    }

    public function insertbook() {
        if ($this->form_validation->run() == false) {
            $_SESSION['errors'] = $this->form_validation->get_errors();
            $this->session->mark_as_flash('errors');
            redirect('admin-roombooking');
        } else {
            $checkIn = date('Y-m-d H:i:s', strtotime($this->io->post('CheckinDate')));
            $checkOut = date('Y-m-d H:i:s', strtotime($this->io->post('CheckoutDate')));
    
            $data = [
                'FullName' => $this->io->post('FullName'),
                'ContactNumber' => $this->io->post('ContactNumber'),
                'Address' => $this->io->post('Address'),
                'RoomType'=> $this->io->post('RoomType'),
                'CheckinDate' => $checkIn,
                'CheckoutDate' => $checkOut,
                'NumberofGuest' => $this->io->post('NumberofGuest'),
                'TotalAmount' => $this->io->post('TotalAmount'),
                'Status' => 'Pending',
            ];

                $this->Booking_model->insertBooking($data);
                $this->session->set_flashdata('success', 'Succesfully insert. ');
                redirect('admin-roombooking');
            }
        }
        public function delete_booking($ReservationId){
            if(isset($ReservationId)){
                $this->db->table('reservation')->where("ReservationId",$ReservationId)->delete();
                redirect('admin-roombooking');
            }else{
                redirect('admin-roombooking');
            }
        }
        public function edit_booking($ReservationId){ 
            $data =[
                'books' => $this->Booking_model->book(),
                'edit' => $this->Booking_model->book($ReservationId),
            ];
            $this->call->view('Admin\booking', $data);
        }
        public function getFeedback(){
            if (!$this->LAVA->is_logged_in()) {
    
                $this->session->set_flashdata('errors', ['Login First']);
                redirect('login');
                return;
                
            }
    
            $data['feedbacks'] = $this->Feedback_model->feedback();
            $this->call->view('Admin\feedback', $data);
        }
        public function postFeedback() {
            // Validate the form
            if ($this->form_validation->run() == false) {
                $_SESSION['errors'] = $this->form_validation->get_errors();
                $this->session->mark_as_flash('errors');
                redirect('');
            } else {
                // Extract message and username from the form
                $data = [
                    'Message' => $this->io->post('Message'), // Fix the input method
                ];
        
                $username = $this->io->post('username'); // Fix the input method
        
                // Check if the username exists in the Usermodel_model
                $user = $this->Usermodel_model->getusername($username);
        
                if ($user) {
                    $data['UserId'] = $user['UserId']; // Assuming UserId is a property of the user object
                    $inserted = $this->Feedback_model->insertfeedback($data);
        
                    if ($inserted) {
                        $this->session->set_flashdata('success', 'Successfully inserted.');
                        redirect('room');
                    } else {
                        $this->session->set_flashdata('error', 'Insertion failed.');
                        redirect('');
                    }
                } else {
                    $this->session->set_flashdata('error', 'Username not found.');
                    redirect('');
                }
            }
        }

        public function acceptance(){   
            
                if (!$this->LAVA->is_logged_in()) {
    
                    $this->session->set_flashdata('errors', ['Login First']);
                    redirect('login');
                    return;
                }
                $data['books'] = $this->Booking_model->acceptance();
                $this->call->view('Admin\acceptance', $data);
    
            }
            public function updateStatus($status, $reservationID)
            {
                // Validate the status
                $allowedStatuses = ['Confirm', 'Pending', 'Cancel'];
                if (!in_array($status, $allowedStatuses)) {
                    // Handle invalid status (you may redirect or show an error message)
                    $this->session->set_flashdata('error', 'Status not found.');
                    redirect('admin-dashboard');
                }
            
                // Get the reservation data
                $reservation = $this->Booking_model->getReservationById($reservationID);
            
                // Check if the reservation exists
                if (!$reservation) {
                    // Handle non-existent reservation (you may redirect or show an error message)
                    $this->session->set_flashdata('error', 'Insertion failed.');
                        redirect('');
                }
            
                // Update the reservation status in the database
                $updateData = ['Status' => $status];
                $this->Booking_model->updateReservation($reservationID, $updateData);
            
                // Redirect to the reservation page or wherever appropriate
                $this->session->set_flashdata('success', 'Successfully inserted.');
                redirect('admin-acceptance');
            }
            
            
    }
?>
