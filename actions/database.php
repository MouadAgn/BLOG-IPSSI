<?php
    
    try{
        //session_start();
        $bdd = new PDO('mysql:host=localhost;dbname=blog_ipssi;charset=utf8;', 'root'); 
    }
    catch(Exception $e)
        {
            die('DATABSE ERROR!' .$e->getMessage());
        } 
?>