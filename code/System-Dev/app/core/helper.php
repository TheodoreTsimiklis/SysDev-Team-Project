<?php

    session_start();

    function isLoggedIn(){
        if(isset($_SESSION['user_email'])){
          return true;
        } else {
          return false;
        }
      }

      function adminLogin(){
        if(isset($_SESSION['user_username'])){
            return true;
          } else {
            return false;
          }
      }

?>