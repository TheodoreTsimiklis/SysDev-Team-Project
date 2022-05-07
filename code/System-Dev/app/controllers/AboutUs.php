<?php

class AboutUs extends Controller {
    public function __construct()
    {
        $this->aboutUsModel = $this->model('aboutUsModel');
    }

    public function index() {
        return $this->view('AboutUs/index');
    }
}