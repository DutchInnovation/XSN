<?php
session_start(); 
 $hostName = "localhost";
 $userName = "root";
 $password = "";
 $dbName = "xsn";
 $conn= new mysqli($hostName,$userName,$password,$dbName);

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

  ?>