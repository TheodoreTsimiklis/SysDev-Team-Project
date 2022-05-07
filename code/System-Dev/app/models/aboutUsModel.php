<?php

    class aboutUsModel{
        public function __construct(){
            $this->db = new Model;
        }
        public function getServices(){
            $this->db->query("SELECT * FROM service");
            return $this->db->getResultSet();
        }
?>