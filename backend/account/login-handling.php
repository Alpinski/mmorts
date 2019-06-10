<?php
    session_start();
    require_once ($_SERVER['DOCUMENT_ROOT']."/mmorts/system/config.php");


    //ASSIGNED VARIABLES FROM FORM
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    //ENCRYPT PASSWORD
    $password = md5($password);
    
    //CHECK IF USER IS UNIQUE
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    if($result = mysqli_query($conn,$sql))
    {
        $rowcount = mysqli_num_rows($result);

    }

    if($rowcount == 1)
    {
        echo "details are correct";
        $_SESSION['loggedin'] = $username;    
        header("Location: ../../index.php?msg=loginsuccess");
        die();
    }
    else
    {
       
        header("Location: ../../index.php?msg=loginunsuccessfull");
        die();
    }
?>