<?php

class Contact extends Controller {
    public function __construct()
    {
        $this->contactModel = $this->model('contactModel');
    }

    public function index() {
        if (isLoggedIn()){
            if (isset($_POST['submit'])) {


            
                $data = [
                    'question_description' => trim($_POST['question_description'])
                ];

                if ($this->contactModel->loginQuestion($data)) {
                    echo 'sending information...';
                    echo '<meta http-equiv="refresh" content="4;url=http://localhost/System-Dev/Contact/confirmation" />';
                } else {
                    echo 'error';
                    echo '<meta http-equiv="refresh" content="4;url=http://localhost/System-Dev/" />';

                }
                } else {
                $this->view('Contact/index');
            }
        } else {
            if (isset($_POST['submit'])) {


            
                $data = [
                    'first_name' => trim($_POST['fName']),
                    'last_name' => trim($_POST['lName']),
                    'phone' => trim($_POST['pNumber']),
                    'email' => trim($_POST['email']),
                    'question' => trim($_POST['question'])
                ];

                if ($this->contactModel->createQuestion($data)) {
                    echo 'sending information...';
                    echo '<meta http-equiv="refresh" content="4;url=http://localhost/System-Dev/Contact/confirmation" />';
                } else {
                    echo 'error';
                    echo '<meta http-equiv="refresh" content="4;url=http://localhost/System-Dev/" />';

                }
                } else {
                $this->view('Contact/index');
            }
        }
    }

    

    public function confirmation(){
        return $this->view('Contact/confirmation');
    }


}