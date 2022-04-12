<?php

class Service extends Controller {
    public function __construct()
    {
        
    }

    public function index() {
        return $this->view('Service/index');
    }
}