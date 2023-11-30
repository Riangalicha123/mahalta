<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class MainController extends Controller {
    public function __construct(){
        parent::__construct();
        $this->call->model('Usermodel_model');
        $this->call->model('Room_model');
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
        
        $data['rooms'] = $this->Room_model->room();
        
        
        $this->call->view('Hotel\room', $data);
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
