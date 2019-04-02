<?php
    function connection(){
        $servernme = "localhost";
        $username = "root";
        $password = "root"; //xamp = blank
        $database = "ForNewWorkers";

        //create a connection
        $conn = new mysqli($servername, $username, $password, $database);

        //Check the connection
        if($conn->connect_error){
            die("Connection failed:". $conn->connect_error);
        }else{
            //echo "connected";
            return $conn;
        }
    } 



?>