<?php
    session_start();
    function isLoggedIn(){
        if(isset($_SESSION['daisy_user'])){
            return true;
        }else{
            return false;
        }
    }