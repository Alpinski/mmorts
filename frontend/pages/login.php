<?php
    global $title;
    global $seperator;
    global $description;
    global $logo;
?>
<html>
    <head>
        <title><?php echo $title.$seperator.$description?></title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
        <link href = "frontend/design/css/stylesheet.css" rel="stylesheet" type = "text/css">
    <head>

    <body>
        <div class  = "wrapper">
            <?php require_once("frontend/templates/header.php"); ?>

            <div class = "layer">
                <div class = "content">
                    <h2>Login</h2>
                    <form role = "form" action = "backend/account/login-handling.php" method = "post">                       
                        <div class = "form-group">
                            <label for = "username">Username:</label>
                            <input type = "text" class = "form-control" id = "username" name = "username" placeholder = "Username" required>
                        </div>
                        
                        <div class = "form-group">
                            <label for = "password">Password:</label>
                            <input type = "password" class = "form-control" id = "password" name = "password" placeholder = "Password" required>
                        </div>
                        <button type="submit" class="btn btn-outline-dark">Submit</button>
                    </form>
                </div>
            </div>
            <?php require_once("frontend/templates/footer.php"); ?>
        </div>
    </body>
</html>