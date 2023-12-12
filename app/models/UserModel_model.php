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
    public function getUser(){
        $data = $this->db->table('users')->select('UserId, username, email, role')
        ->where('role', 'Guest')
        ->get_all();
        return $data;
    }
    public function getGuests(){
        $data = $this->db->table('users')
        ->select_count('*', 'role')
        ->where('role', 'guest')
        ->group_by('role')
        ->get_all(); 
return $data;
    }
    public function getusername($username)
{
    // Use row() instead of get() to retrieve a single row
    return $this->db->table('users')->where('username', $username)->get();
}

    
}
    
?>
