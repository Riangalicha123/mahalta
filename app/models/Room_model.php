<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Room_model extends Model {
	public function __construct(){
        parent::__construct();
        $this->call->database();
    }
	public function room()
    {        
        $data = $this->db->table('room')->get_all();
        return $data;
    }
}
?>
