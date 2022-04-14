<?php

    class contactModel{
        public function __construct(){
            $this->db = new Model;
        }
    
        public function createQuestion($data) {
            $this->db->query("INSERT INTO questionnotloggedin (first_name, last_name, phone, email, question) VALUES (:first_name, :last_name, :phone, :email, :question)");
            $this->db->bind(":first_name", $data['first_name']);
            $this->db->bind(":last_name", $data['last_name']);
            $this->db->bind(":phone", $data['phone']);
            $this->db->bind(":email", $data['email']);
            $this->db->bind(":question", $data['question']);
    
            return $this->db->execute();
        }
    }
?>