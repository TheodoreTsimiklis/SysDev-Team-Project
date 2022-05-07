<?php

    class serviceModel{
        public function __construct(){
            $this->db = new Model;
        }
        
        public function getServices(){
            $this->db->query("SELECT * FROM service");
            return $this->db->getResultSet();
        }

        public function createService($data){
            $this->db->query("INSERT INTO service (service_name, service_description, service_image) values (:service_name, :service_description, :service_image)");
            $this->db->bind(':service_name', $data['service_name']);
            $this->db->bind(':service_description', $data['service_description']);
            $this->db->bind(':service_image', $data['service_image']);
            
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function delete($data){
            $this->db->query("DELETE FROM service WHERE ID=:service_id");
            $this->db->bind('service_id',$data['ID']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }
    }
?>