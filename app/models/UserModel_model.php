<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UserModel_model extends Model {
	public function __construct(){
        parent::__construct();
        $this->call->database();
    }
	public function register($data)
    {
        $bind = array(
            'username' => $data['username'],
            'email' =>  $data['email'],
            'password' =>  $data['password'],
            'role' =>  $data['role'],

            );
        
        $this->db->table('users')->insert($bind);
    }
    public function authenticateUser($email, $password)
    {
        $user = $this->db->table('users')
            ->where('email', $email)
            ->get();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        } else {
            return null;
        }
    }
    public function getUserDataById($UserId)
    {

        return $this->db->table('users')->where('UserId', $UserId)->get();

    }
    /* public function authenticate($username, $password)
    {
        $user = $this->db->table('users')->where('username', $username)->where('password', $password)->get();

        return ($user) ? $user : false;
    } */
}
?>
