<?php

class Reply extends Controller {
    public function __construct()
    {
        
    }

    public function index() {
        return $this->view('Reply/index');
    }
}