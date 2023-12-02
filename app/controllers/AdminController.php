<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AdminController extends Controller {
    public function __construct(){
        parent::__construct();
        $this->call->model('Usermodel_model');
        $this->call->model('Booking_model');
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
}
?>
