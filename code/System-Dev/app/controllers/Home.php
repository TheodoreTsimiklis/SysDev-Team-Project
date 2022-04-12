<?php

class Home extends Controller {
    public function __construct()
    {
        
    }

    public function index() {
        return $this->view('Home/index');
    }
}