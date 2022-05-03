<?php

    class profileModel{
        public function __construct(){
            $this->db = new Model;
        }


    public function createProfile($data) {
        $this->db->query("INSERT INTO client_profile (full_name, email, phone, image) VALUES (:full_name, :email, :phone, :image)");
        $this->db->bind(":full_name", $data['full_name']);
        $this->db->bind(":email", $data['email']);
        $this->db->bind(":phone", $data['phone']);
        $this->db->bind(":image", $data['image']);   
        return $this->db->execute();
    }

    public function getProfileFromAuthor($data) {
        $this->db->query("SELECT * FROM client_profile WHERE email = :email");
        $this->db->bind(":email", $data['email']);

        return $this->db->getSingle();
    }
?>