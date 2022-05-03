<?php

class Profile extends Controller {
    public function __construct()
    {
        
    }

    public function index() {
        //return $this->view('Profile/index');
        if (!isLoggedIn()) {
            echo '<meta http-equiv="refresh" content="0;url=http://localhost/System-Dev/" />';
        } else {
            if (!isset($_POST['submit'])) {
                return $this->view('Profile/signup');
            } else {
                $data = [
                    'full_name' => $_POST['full_name'],
                    'phone' => $_POST['first_name'],
                    'image' => $_POST['image'],
                    'email' => $_SESSION['user_email']
                ];

                if ($this->profileModel->createProfile($data)) {
                    echo '<meta http-equiv="refresh" content=".5;url=http://localhost/System-Dev/" />';
                } else {

                }
            }
        }
    }
}