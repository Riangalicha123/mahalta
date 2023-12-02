<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class MainController extends Controller {
    public function __construct(){
        parent::__construct();
        $this->call->model('Usermodel_model');
        $this->call->model('Booking_model');
        $this->LAVA = lava_instance();
    }
	public function home() {
        if (!$this->LAVA->is_logged_in()) {

            $this->session->set_flashdata('errors', ['Login First']);
            redirect('login');
            return;
        }


        $this->call->view('Hotel/home');
    }
    
    public function room(){
        if (!$this->LAVA->is_logged_in()) {

            $this->session->set_flashdata('errors', ['Login First']);
            redirect('login');
            return;
        }
        
        
        
        $this->call->view('Hotel\room');
    }
    public function insertroom() {
        if ($this->form_validation->run() == false) {
            $_SESSION['errors'] = $this->form_validation->get_errors();
            $this->session->mark_as_flash('errors');
            redirect('room');
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
                redirect('room');
            }
        }
    public function gallery(){
        if (!$this->LAVA->is_logged_in()) {

            $this->session->set_flashdata('errors', ['Login First']);
            redirect('login');
            return;
        }
        $this->call->view('Hotel\gallery');
    }
    public function blog(){
        if (!$this->LAVA->is_logged_in()) {

            $this->session->set_flashdata('errors', ['Login First']);
            redirect('login');
            return;
        }
        $this->call->view('Hotel\blog');
    }
    public function contact(){
        if (!$this->LAVA->is_logged_in()) {

            $this->session->set_flashdata('errors', ['Login First']);
            redirect('login');
            return;
        }
        $this->call->view('Hotel\contact');
    }
    public function is_logged_in() {
        // Assuming this method is checking if the user is logged in
        $isLogged = $this->LAVA->session->has_userdata('logged_in') && $this->LAVA->session->userdata('logged_in');
        return $isLogged;
    }
}
?>
