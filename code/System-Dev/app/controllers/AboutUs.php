<?php

class AboutUs extends Controller {
    public function __construct()
    {
        
    }

    public function index() {
        return $this->view('AboutUs/index');
    }
}