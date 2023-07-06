<?php

require 'eleves_Liste.php';

if (isset($_POST['email']) && isset($_POST['pwd'])){

    if (!empty($_POST['email']) && !empty($_POST['pwd'])){

        $email = $_POST['email'];
        $email = $_POST['pwd'];

        foreach($users as $users){

            if($email === $user['email'] && $password === $user['pwd']){
                header('location: admin/dashboard.php');
                exit;
        }
    }
}
}



// var_dump($POST);