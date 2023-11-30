<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UserController extends Controller {
    public function __construct(){
        parent::__construct();
        $this->call->model('Usermodel_model');
        $this->LAVA = lava_instance();
    }

    public function index(){
        $this->call->view('Signin_up');
    }

    public function registerAuth()
    {
        /* if($this->form_validation->submitted()){ */
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

            if($this->form_validation->run()==false){
                $_SESSION['errors'] = $this->form_validation->get_errors();
                $this->session->mark_as_flash('errors');

                redirect('login');
            }else{
                $data = [
                    'username' => $this->io->post('username'),
                    'email' => $this->io->post('email'),
                    'password' => password_hash($this->io->post('password'),PASSWORD_BCRYPT),
                    'role' => 'User',
                ];
                $this->Usermodel_model->register($data);
                $this->session->set_flashdata('success', 'Registration succesful. ');
                redirect('login');
            }
                /* $username = $this->io->post('username');
                $email = $this->io->post('email');
                $password = md5($this->io->post('password'));
                
                // Set role to 'User' when inserting
                $role = 'User';

                $this->Usermodel_model->insert($username, $email, $password, $role); 
                redirect('login');
            } else {
                echo $this->form_validation->errors();
            } */
/*         } */
    }
    public function loginAuth()
    {
        $email = $this->io->post('email');
        $password = $this->io->post('password');

        $user = $this->Usermodel_model->authenticateUser($email, $password);

        if ($user) {
            $this->set_logged_in($user['UserId']); // Corrected: Use set_logged_in method

            // Check the role and redirect accordingly
            $role = $user['role'];
            if ($role === 'User') {
                redirect('');
            } elseif ($role === 'Admin') {
                redirect('admin-dashboard');
            }

        } else {

            $this->session->set_flashdata('errors', ['Invalid email or password']);
            redirect('login');
        }


        /* $this->form_validation
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
        } */
}
    public function set_logged_in($UserId)
    {
        $user_data = $this->Usermodel_model->getUserDataById($UserId);

        if (!empty($user_data)) {
            $this->session->set_userdata([
                'UserId' => $user_data['UserId'],
                'username' => $user_data['username'],
                'email' => $user_data['email'],
                'role' => $user_data['role'], // Include role in session data
                'logged_in' => true
            ]);
        }
    }

public function is_logged_in()
{
    $isLogged = $this->LAVA->session->has_userdata('logged_in') && $this->LAVA->session->userdata('logged_in');
    return $isLogged;
}

public function logout()
{
    $this->LAVA->session->sess_destroy();
    redirect('login');
}


}
?>
