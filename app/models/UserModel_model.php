<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UserModel_model extends Model {
	public function __construct(){
        parent::__construct();
        $this->call->database();
    }
	public function insert($username, $email, $password, $role)
    {
        $bind = array(
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'role' => $role,

            );
        
        $this->db->table('users')->insert($bind);
    }
    public function authenticate($username, $password)
    {
        $user = $this->db->table('users')->where('username', $username)->where('password', $password)->get();

        return ($user) ? $user : false;
    }
}
?>
