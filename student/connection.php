<?php
$servername ="localhost";
             $user_name = "root";
             $password="";
             $dbname="libmansys";
             $conn = new mysqli($servername,$user_name,$password,$dbname);
             if($conn->connect_error){
                 
                 die($conn->connect_error);
             }
             
             ?>

