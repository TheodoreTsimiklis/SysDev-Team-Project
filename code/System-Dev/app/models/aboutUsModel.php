<?php

    class aboutUsModel{
        public function __construct(){
            $this->db = new Model;
        }

        public function getServices(){
            $this->db->query("SELECT * FROM service");
            return $this->db->getResultSet();
        }

        public function getServiceImage($service_id) {
            $this->db->query("SELECT service_image FROM service WHERE ID = :service_id");
            $this->db->bind(':service_id',$service_id);
            return $this->db->getSingle();

        }

        public function getServiceName() {

        }

        public function getServiceDescription() {

        }
    }
?>