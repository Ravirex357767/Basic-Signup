<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "signup";

    $con = mysqli_connect($server, $username, $password, $dbname);
        if($con) {
            echo "Connected Successfully";
        } else {
            echo "Something went with the server";
        }   
?>