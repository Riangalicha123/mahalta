<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AdminController extends Controller {
	public function dashboard(){
        $this->call->view('Admin\index');
    }
}
?>
