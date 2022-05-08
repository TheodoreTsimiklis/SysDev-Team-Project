<?php

class AboutUs extends Controller {
    public function __construct()
    {
        $this->serviceModel = $this->model('serviceModel');
    }

    public function index() {
        $services = $this->serviceModel->getServices();
        $data = [
            "services" => $services
        ];
        // $this->view('Service/getService',$data);
        return $this->view('AboutUs/index', $data);
    }
}