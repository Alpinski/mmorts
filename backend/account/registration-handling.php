<?php
    require_once ($_SERVER['DOCUMENT_ROOT']."/mmorts/system/config.php");

    //ASSIGNED VARIABLES FROM FORM
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    //ENCRYPT PASSWORD
    $password = md5($password);

    //CHECK IF VALUES ARE OKAY

    //CHECK IF USER IS UNIQUE
    $sql = "SELECT username FROM users WHERE username = '$username'";

    if($result = mysqli_query($conn,$sql))
    {
        $rowcount = mysqli_num_rows($result);

    }

    if($rowcount >= 1)
    {
        echo "A user with that username already exists.";
    }
    else
    {
        //INSERT DATA INTO DATABASE
        $sql = "INSERT INTO users(username, password, email)
        VALUES('$username', '$password', '$email')";
    
        //EXECUTE QUERY
        if($conn->query($sql) === TRUE)
        {
            echo "Account has been created successfully.";
        }
        else
        {
            echo "Error: ".$sql."<br/>".$conn->error;
        }
    }
?>