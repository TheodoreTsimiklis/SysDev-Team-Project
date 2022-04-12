<?php

    class loginModel{
        public function __construct(){
            $this->db = new Model;
        }



        public function getUser($email){
            $this->db->query("SELECT * FROM client_account WHERE email = :email");
            $this->db->bind(':email',$email);
            return $this->db->getSingle();
        }

        public function getAdmin($username){
            $this->db->query("SELECT * FROM admin_account WHERE username = :username");
            $this->db->bind(':username',$username);
            return $this->db->getSingle();
        }


    public function createUser($data){
            $this->db->query("INSERT INTO client_account (email, pass_hash) values (:email, :pass_hash)");
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':pass_hash', $data['pass_hash']);


            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }
    }
?>