<?php
    require_once ("system/functions.php");
    require_once ("system/config.php");
    
    if($maintenance == true)
    {
        echo "The site is currently under maintenance.";
    }
    elseif( $maintenance == false)
    {
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
                <div id  = "wrapper">
                    <div>
                        Header
                    </div>
                    <div>
                        Content
                    </div>
                    <div>
                        Footer
                    </div>
                </div>
            </body>
        </html>
    <?php
    }
?>