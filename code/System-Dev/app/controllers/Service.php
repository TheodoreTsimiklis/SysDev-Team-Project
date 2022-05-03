<?php header("Location: $url");

class Service extends Controller {
    public function __construct()
    {
        
    }

    public function index() {
        return $this->view('Service/index');
    }

    public function insert(){
        if  (isset($_POST['submit'])){
        echo '<meta content="url=http://localhost/System-Dev/Service/insert" />';
        }
    }
}