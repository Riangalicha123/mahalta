<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UserController extends Controller {
    public function __construct(){
        parent::__construct();
        $this->call->model('Usermodel_model');

    }

    public function index(){
        $this->call->view('Signin_up');
    }

    public function register()
    {
        if($this->form_validation->submitted()){
            $this->form_validation
                ->name('username')
                    ->required()
                    ->min_length(5)
                    ->max_length(20)
                ->name('email')
                    ->valid_email()
                ->name('password')
                    ->required()
                    ->min_length(8)
                ->name('cpassword')
                    ->matches('password')
                    ->required()
                    ->min_length(8);

            if($this->form_validation->run()){
                $username = $this->io->post('username');
                $email = $this->io->post('email');
                $password = md5($this->io->post('password'));
                
                // Set role to 'User' when inserting
                $role = 'User';

                $this->Usermodel_model->insert($username, $email, $password, $role); 
                redirect('login');
            } else {
                echo $this->form_validation->errors();
            }
        }
    }
    public function login(){
        if($this->form_validation->submitted()){
            $this->form_validation
                ->name('username')
                ->required()
                    ->min_length(5)
                    ->max_length(50)
                ->name('password')
                    ->required()
                    ->min_length(8);

            if($this->form_validation->run()){
                $username = $this->io->post('username');
                $password = md5($this->io->post('password'));

                $user = $this->Usermodel_model->authenticate($username, $password);

                if($user){

                    $role = $user['role'];

                    if($role === 'User'){
                        redirect('');
                    } elseif($role === 'Admin'){
                        redirect('admin-dashboard');
                    }
                } else {
                    echo "Invalid username or password";
                }
            } else {
                echo $this->form_validation->errors();
            }
        }
    }



}
?>
