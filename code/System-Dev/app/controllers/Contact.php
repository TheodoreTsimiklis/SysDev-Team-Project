<?php

class Contact extends Controller {
    public function __construct()
    {
        
    }

    public function index() {
        return $this->view('Contact/index');
    }
}