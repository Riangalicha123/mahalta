<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AdminController extends Controller {
    public function __construct(){
        parent::__construct();
        $this->call->model('Usermodel_model');
        $this->call->model('Room_model');
        $this->call->model('Booking_model');
        $this->LAVA = lava_instance();
    }
	public function dashboard(){
        if (!$this->LAVA->is_logged_in()) {

            $this->session->set_flashdata('errors', ['Login First']);
            redirect('login');
            return;
        }

        $this->call->view('Admin\index');
    }
    public function guest(){
        if (!$this->LAVA->is_logged_in()) {

            $this->session->set_flashdata('errors', ['Login First']);
            redirect('login');
            return;
        }
        $this->call->view('Admin\guest');
    }
    public function room(){
        if (!$this->LAVA->is_logged_in()) {

            $this->session->set_flashdata('errors', ['Login First']);
            redirect('login');
            return;
        }
        $data['rooms'] = $this->Room_model->room();
        
        
        $this->call->view('Admin\room', $data);
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
}
?>
