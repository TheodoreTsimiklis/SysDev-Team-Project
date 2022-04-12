<?php

class People extends Controller {
    public function __construct()
    {
        $this->loginModel = $this->model('loginModel');
    }

    public function index() {
        if(!isset($_POST['admin'])){
            $this->view('People/index');
        }
        else{
            $user = $this->loginModel->getAdmin($_POST['Username']);
            
            if($user != null){
                $hashed_pass = $user->pass_hash;
                $pass = $_POST['Password'];
                
                if($pass == $hashed_pass){
                    //echo '<meta http-equiv="Refresh" content="2; url=/MVC/">';
                    $this->createSession($user);
                    $data = [
                        'msg' => "Welcome, $user->username!",
                    ];
                    $this->view('Home/index',$data);
                }
                else{
                    $data = [
                        'msg' => "Password incorrect! for $user->username",
                    ];
                    $this->view('People/index',$data);
                }
            }
            else{
                $data = [
                    'msg' => "Wrong credentials",
                ];
                $this->view('People/index',$data);
            }
        }
        
    }

    public function SignUp(){
        if (!isset($_POST['signup'])) {
            $this->view('People/SignUp');
        } else {
            $user = $this->loginModel->getUser($_POST['signup']);
            if ($user == null) {
                $data = [
                    'email' => $_POST['email'],
                    'pass' => $_POST['password'],
                    'pass_verify' => $_POST['verify_password'],
                    'pass_hash' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                    'email_error' => '',
                    'pass_error' => '',
                    'pass_match_error' => '',
                    'pass_len_error' => '',
                    'msg' => ''
                ];
                if ($this->validateData($data)) {
                    if ($this->loginModel->createUser($data)) {
                        echo 'Please wait creating the account for ' . trim($_POST['email']);
                        echo '<meta http-equiv="Refresh" content="2; url=People/SignIn">';
                    }
                }
            } else {
                $data = [
                    'msg' => "User: " . $_POST['first_name'] . " already exists",
                ];
                $this->view('People/SignUp', $data);
            }
        }
    }



    


    public function SignIn(){
        if(!isset($_POST['login'])){
            $this->view('People/SignIn');
        }
        else{
            $user = $this->loginModel->getUser($_POST['Email']);
            
            if($user != null){
                $hashed_pass = $user->pass_hash;
                $pass = $_POST['Password'];
                
                if(password_verify($pass, $hashed_pass)){
                    //echo '<meta http-equiv="Refresh" content="2; url=/MVC/">';
                    $this->createSession($user);
                    $data = [
                        'msg' => "Welcome, $user->email!",
                    ];
                    $this->view('Home/index',$data);
                }
                else{
                    $data = [
                        'msg' => "Password incorrect! for $user->email",
                    ];
                    $this->view('People/SignIn',$data);
                }
            }
            else{
                $data = [
                    'msg' => "Wrong credentials",
                ];
                $this->view('People/SignIn',$data);
            }
        }
    }

    public function validateData($data)
    {
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $data['email_error'] = 'Please check your email and try again';
        }
        if (strlen($data['pass']) < 6) {
            $data['pass_len_error'] = 'Password can not be less than 6 characters';
        }
        if ($data['pass'] != $data['pass_verify']) {
            $data['pass_match_error'] = 'Password does not match';
        }

        if (empty($data['pass_error']) && empty($data['pass_len_error']) && empty($data['pass_match_error'])) {
            return true;
        } else {
            $this->view('SignUp/index', $data);
        }
    }


    private function createSession($user){
        echo '<meta http-equiv="Refresh" content="0; url=/System-Dev/">';
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_username'] = $user->username;
        
        
    }

    public function logout(){
        unset($_SESSION['user_email']);
        unset($_SESSION['user_username']);
        session_destroy();
        echo '<meta http-equiv="Refresh" content="1; url=/System-Dev/">';
    }


    
}