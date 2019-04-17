<?php

    session_start();

    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $btnlogin = $_POST['btnlogin'];

    $connect = mysql_connect("127.0.0.1", "root", "senha") or die ("Sem conexão com o servidor");
    $db = mysql_select_db(server);

    if(isset($btnlogin)){
        $verifica = mysql_query("SELECT * FROM `USER` WHERE `EMAIL` = '$email' AND `PASSWORD` = '$password'");

        if(mysql_num_rows($verifica) > 0){
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('location:pnladmin.php');
        }
        else {
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            header('location:index.html');
        }
    }
?>