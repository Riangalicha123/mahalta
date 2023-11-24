<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class MainController extends Controller {
	public function home(){
        $this->call->view('Hotel\home');
    }
    public function about(){
        $this->call->view('Hotel\about');
    }
    public function room(){
        $this->call->view('Hotel\room');
    }
    public function gallery(){
        $this->call->view('Hotel\gallery');
    }
    public function blog(){
        $this->call->view('Hotel\blog');
    }
    public function contact(){
        $this->call->view('Hotel\contact');
    }
}
?>
