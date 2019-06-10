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
        <link rel="stylesheet" href="frontend/design/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
        <link href = "frontend/design/css/stylesheet.css" rel="stylesheet" type = "text/css">
    <head>

    <body>
        <div class  = "wrapper">
            <?php require_once("frontend/templates/header.php"); ?>

            <div class = "layer">
                <div class = "content">
                    <h2>Index</h2>
                    <p>Index Page</p>
                    <?php
                        if(isset($_GET['msg']))
                        {
                            $bad = false;
                            
                            $msg = $_GET['msg'];

                            if($msg == "loginsuccess")
                            {
                                $msg = "You successfully logged in!";
                            }
                            if($msg == "registrationsuccess")
                            {
                                $msg = "You successfully registred!";
                            }
                            if($msg == "logoutsuccess")
                            {
                                $msg = "You successfully logged out!";
                            }   
                            if($msg == "loginunsuccessfull")
                            {
                                $bad = true;
                                $msg = "You failed to log in!";
                            }  
                            if($bad == true)
                            {
                                ?>
                                    <div class="alert alert-danger" role="alert"><?php echo $msg; ?></div>
                                <?php
                            }
                            else 
                            {
                                ?>
                                    <div class="alert alert-success" role="alert"><?php echo $msg; ?></div>                                  
                                <?php
                            }
                        }
                                if(isset($_SESSION['loggedin']))
                                {
                                ?>
                                    <h3>Village</h3>

                                    <div class = "village-wrapper">

                                        <div class = "resources">
                                            Resources
                                        </div>

                                        <div class = "village">
                                            Village image
                                        </div>
                                    
                                        <div class = "armies">
                                            Armies
                                        </div>
                                    </div>

                                <?php
                                }
                                ?>
                    <a href="index.php?page=index">Index</a>
                    <a href="index.php?page=contact">Contact</a>
                </div>
            </div>
            <?php require_once("frontend/templates/footer.php"); ?>
        </div>
    </body>
</html>