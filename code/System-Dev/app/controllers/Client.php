<?php

class Client extends Controller {
    public function __construct()
    {
        
    }

    public function index() {
        return $this->view('Client/index');
    }
}