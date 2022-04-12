<?php

class Booking extends Controller {
    public function __construct()
    {
        
    }

    public function index() {
        return $this->view('Booking/index');
    }
}