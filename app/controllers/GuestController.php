<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class GuestController extends Controller {
	public function __construct(){
        parent::__construct();
        $this->call->model('Usermodel_model');
        $this->call->model('Booking_model');
        $this->call->model('Feedback_model');
        $this->LAVA = lava_instance();
    }
}
?>
