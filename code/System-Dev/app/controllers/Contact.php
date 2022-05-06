<?php

class Contact extends Controller
{
    public function __construct()
    {
        $this->questionModel = $this->model('questionModel');
    }

    public function index()
    {

        if (isset($_POST['submit'])) {

            $data = [
                'first_name' => trim($_POST['fName']),
                'last_name' => trim($_POST['lName']),
                'phone' => trim($_POST['phone']),
                'email' => trim($_POST['email']),
                'question' => trim($_POST['question'])
            ];

            if ($this->questionModel->createQuestion($data)) {
                echo 'sending information...';
                echo '<meta http-equiv="refresh" content="2;url=http://localhost/System-Dev/Contact/confirmation" />';
            } else {
                echo 'error';
                echo '<meta http-equiv="refresh" content="2;url=http://localhost/System-Dev/" />';
            }
        } else {
            $this->view('Contact/index');
        }
    }



    public function confirmation()
    {
        return $this->view('Contact/confirmation');
    }
}
