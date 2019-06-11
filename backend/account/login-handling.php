<?php
    session_start();
    require_once ($_SERVER['DOCUMENT_ROOT']."/mmorts/system/config.php");


    //ASSIGNED VARIABLES FROM FORM
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    //ENCRYPT PASSWORD
    //$password = md5($password);
    
    //CHECK IF USER IS UNIQUE
    $query = "SELECT password FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    $dbPassword = $row['password'];

    if(password_verify($password, $dbPassword))
    {
        echo "details are correct";
        $_SESSION['loggedin'] = $username;    
    
        header("Location: ../../index.php?msg=loginsuccess");
        die();

    }
    else
    {
        echo "Passwords do not match";
    }

   
?>