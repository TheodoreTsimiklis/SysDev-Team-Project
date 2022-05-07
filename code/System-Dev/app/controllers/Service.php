<?php

class Service extends Controller {
    public function __construct()
    {
        $this->serviceModel = $this->model('serviceModel');
    }

    public function index() {
        return $this->view('Service/index');
    }

    public function getServices(){
        $services = $this->serviceModel->getServices();
        $data = [
            "service" => $services
        ];
        $this->view('Service/getService',$data);
    }

    public function createService(){
        if(!isset($_POST['add'])){
            $this->view('Service/createService');
        }
        else{
            $filename= $this->imageUpload();
            $data=[
                'service_name' => trim($_POST['serviceName']),
                'service_description' => trim($_POST['serviceDescription']),
                'service_image' => $filename
            ];
            
            if($this->serviceModel->createService($data)){
                echo 'Please wait we are creating the service for you!';
                header('Location: /System-Dev/Service/getServices');
            }

        }
    }

    public function imageUpload(){
        //default value for the picture
        $filename=false;
        
        //save the file that gets sent as a picture
        $file = $_FILES['picture'];
        
        $acceptedTypes = ['image/jpeg'=>'jpg',
            'image/gif'=>'gif',
            'image/png'=>'png'];
        //validate the file
        
        if(empty($file['tmp_name']))
            return false;

        $fileData = getimagesize($file['tmp_name']);

        if($fileData!=false && 
            in_array($fileData['mime'],array_keys($acceptedTypes))){

            //save the file to its permanent location
                
            $folder = dirname(APPROOT).'/public/image';
            $filename = uniqid() . '.' . $acceptedTypes[$fileData['mime']];
            move_uploaded_file($file['tmp_name'], "$folder/$filename");
        }
        return $filename;
    }

    public function delete($service_id){
        $data=[
            'ID' => $service_id
        ];
        if($this->serviceModel->delete($data)){
            echo 'Please wait we are deleting the service for you!';
            echo '<meta http-equiv="Refresh" content=".2; url=/System-Dev/Service/getServices">';
        }

    }
}