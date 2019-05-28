<?php
    //DATABASE CONNECTION
    $dbserver       = "localhost";
    $dbusername     = "root";
    $dbpassword     = "";
    $db             = "mmorts";


    //CREATE CONNECTION
    $conn = new mysqli($dbserver, $dbusername, $dbpassword, $db);

    //CHECK CONNECTION
    if($conn->connect_error)
    {
        die("Connection failed:".$conn->connect_error);
    }
    else
    {
        echo "connection success";
        //IF CONNECTION IS GOOD, GET DATA FROM DATABASE
        $query = "SELECT name, seperator, description, maintenance FROM configuration";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
      
        //GENRAL VARIABLES
        $title          = $row['name'];
        $seperator      = $row['seperator'];
        $description    = $row['description'];
        
        
        
        
        //TECHNICAL SETTINGS
        $maintenance    = $row['maintenance'];
    }


?>