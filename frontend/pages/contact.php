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
    <?php
    if(isset($_SESSION['loggedin']))
    {
    ?>
    <body>
        <div class  = "wrapper">
            <?php require ("frontend/templates/header.php"); ?>
            <div class = "layer">
                <div class = "content">
                    <h2>Tic-Tac-Toe/Knots & Crosses/XOXO</h2>
                    <?php
                            $winner = 'n';
                            $box = array('','','','','','','','','');

                            if(isset($_POST['submitbtn']))
                            {
                                $box[0] = $_POST["box0"];
                                $box[1] = $_POST["box1"];
                                $box[2] = $_POST["box2"];
                                $box[3] = $_POST["box3"];
                                $box[4] = $_POST["box4"];
                                $box[5] = $_POST["box5"];
                                $box[6] = $_POST["box6"];
                                $box[7] = $_POST["box7"];
                                $box[8] = $_POST["box8"];

                                if (($box[0] == 'x' && $box[1] == 'x' && $box[2] == 'x') ||
		                            ($box[3] == 'x' && $box[4] == 'x' && $box[5] == 'x') ||
                                    ($box[6] == 'x' && $box[7] == 'x' && $box[8] == 'x') ||
                                    ($box[0] == 'x' && $box[4] == 'x' && $box[8] == 'x') ||
                                    ($box[2] == 'x' && $box[4] == 'x' && $box[6] == 'x') ||
                                    ($box[0] == 'x' && $box[3] == 'x' && $box[6] == 'x') ||
                                    ($box[1] == 'x' && $box[4] == 'x' && $box[7] == 'x') ||
                                    ($box[2] == 'x' && $box[5] == 'x' && $box[8] == 'x'))
                                {
                                    $winner = 'x';
                                    print ("</br>X WINS");

                                }
                                $blank = 0;
                                for ($i=0; $i<=8; $i++)
                                {
                                    if ($box[$i] == '')
                                    {
                                        $blank = 1;
                                    }
                                }
                                if ($blank == 1 && $winner == 'n')
                                {
                                    $i = rand() % 8;
                                    
                                    while($box[$i] != '')
                                    {
                                        $i = rand() % 8;
                                    }
                                    
                                    $box[$i] = 'o';
                                    
                                    if (($box[0] == 'o' && $box[1] == 'o' && $box[2] == 'o') ||
                                        ($box[3] == 'o' && $box[4] == 'o' && $box[5] == 'o') ||
                                        ($box[6] == 'o' && $box[7] == 'o' && $box[8] == 'o') ||
                                        ($box[0] == 'o' && $box[4] == 'o' && $box[8] == 'o') ||
                                        ($box[2] == 'o' && $box[4] == 'o' && $box[6] == 'o') ||
                                        ($box[0] == 'o' && $box[3] == 'o' && $box[6] == 'o') ||
                                        ($box[1] == 'o' && $box[4] == 'o' && $box[7] == 'o') ||
                                        ($box[2] == 'o' && $box[5] == 'o' && $box[8] == 'o'))
                                    {
                                        $winner = 'o';
                                        print ("</br>O WINS");
                                    }
                                }
                                else if ($winner == 'n')
                                {
                                    $winner = 't';
                                    print ("</br>TIED GAME");
                                }
                            }
                        
                        /*if(isset($_SESSION['loggedin']))
                        {
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

                            $username = $_SESSION['loggedin'];

                            //IF CONNECTION IS GOOD, GET DATA FROM DATABASE
                            $query = "SELECT id FROM users WHERE username = '$username'";
                            $result = mysqli_query($conn, $query);
                            $row = mysqli_fetch_assoc($result);
                        
                            //USERDATA
                            $userId = $row['id'];
                            
                            //GET CITY DATA
                            $query = "SELECT id, name, resources_id FROM cities WHERE user_id = '$userId'";
                            $result = mysqli_query($conn, $query);
                            $row = mysqli_fetch_assoc($result);

                            //USERDATA
                            $cityId = $row['id'];
                            $cityName = $row['name'];
                            $cityResourcesId = $row['resources_id'];

                            //GET CITY RESOURCES
                            $query = "SELECT wood, ore, clay, food FROM resources WHERE id = '$cityResourcesId'";
                            $result = mysqli_query($conn, $query);
                            $row = mysqli_fetch_assoc($result);

                            $wood = $row['wood'];
                            $ore = $row['ore'];
                            $clay = $row['clay'];
                            $food = $row['food'];

                            //GET CITY RESOURCES PRODUCTION
                            $query = "SELECT wood_production, ore_production, clay_production, food_production FROM production WHERE city_id = '$cityId'";
                            $result = mysqli_query($conn, $query);
                            $row = mysqli_fetch_assoc($result);

                            $wood_production = $row['wood_production'];
                            $ore_production = $row['ore_production'];
                            $clay_production = $row['clay_production'];
                            $food_production = $row['food_production'];
                        ?>
                            <center><h3><?php echo $cityName?></h3></center>

                            <div class = "village-wrapper">

                                <div class = "resources">
                                    <h4>Resources</h4>
                                    <?php
                                        echo "Wood: "   .$wood. "<br/>";
                                        echo "Ore: "    .$ore.  "<br/>";
                                        echo "Clay: "   .$clay. "<br/>";
                                        echo "Food: "   .$food. "<br/>";

                                    ?>
                                    <h4><strong>Production</strong></h5>
                                    <?php
                                        echo "Wood: "   .$wood_production. "<br/>";
                                        echo "Ore: "    .$ore_production.  "<br/>";
                                        echo "Clay: "   .$clay_production. "<br/>";
                                        echo "Food: "   .$food_production. "<br/>";
                                    ?>
                                </div>

                                <div class = "village">
                                    <div class = "keep">
                                        <a href = "http://google.com"><img src = "frontend/images/keep.png"/>
                                    </div>
                                </div>
                            
                                <div class = "armies">
                                    <h4>Armies</h4>
                                </div>
                            </div>*/

                        //<?php
                        //}
                        ?>
                        <style type = "text/css">
                        
                        #box
                        {
                            background-color: #c3ccb5;
                            border: 3px solid #008000;
                            width: 100px;
                            height: 100px;
                            font-size: 70px;
                            text-align: center;
                        }
                        #go
                        {
                            width: 150px;
                            height: 50px;
                            background-color: #cddc39;
                            font-size: 20px;
                        }
                        #again
                        {
                            width: 200px;
                            height: 50px;
                            background-color: #cddc39;
                            font-size: 20px;
                        }
                        </style>
		                <body bgcolor = "green" align = "center">
                        <form name = "tictactoe" action = "index.php?page=contact" method = "post">
                        <div class  = "games">
                            
                        </div>
                        <?php
                            $idValue = $_SESSION['loggedin'];
                            for($i = 0; $i <=8; $i++)
                            {
                                printf('<input type = "text" name = "box%s" value = "%s" id = "box">', $i, $box[$i]);

                                if($i == 2 || $i == 5 || $i == 8)
                                {
                                    print('<br>');
                                }
                            }
                            if($winner == 'n')
                            {
                                print('</br><input type = "submit" name = "submitbtn" value = "PLAY" id = "go">');
                            }
                            else
                            {
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

                                $sql = "SELECT id FROM users WHERE username='$idValue'";

                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) 
                                {
                                    while($row = $result->fetch_assoc()) 
                                    {
                                        $id = $row['id'];
                                    }
                                } 
                                
                                $conn = new mysqli($dbserver, $dbusername, $dbpassword, $db);
                                if ($conn->connect_errno) 
                                {
                                    printf("<p>Connect failed: %s\n</p>", $con->connect_error);
                                    exit();
                                }

                                $sql = "SELECT games_played FROM game_records WHERE id='$id'";
                                $result = $conn->query($sql);
                                
                                if ($result->num_rows > 0) 
                                {
                                    while($row = $result->fetch_assoc()) 
                                    {
                                        $gamesPlayed = $row['games_played'];
                                    }
                                }
                                else
                                {
                                    $gamesPlayed = 0;
                                }

                                $conn = new mysqli($dbserver, $dbusername, $dbpassword, $db);
				
                                if ($conn->connect_error) 
                                {
                                    die("<p>Connection failed: </p>" . $conn->connect_error);
                                }
                                
                                if ($gamesPlayed <= 0)
                                {
                                    $gamesPlayed++;
                                    
                                    $sql = "INSERT INTO game_records (id, games_played) VALUES ('$id', '$gamesPlayed')";
                                    $result = $conn->query($sql);
                                    
                                    if (!$result)
                                    {
                                        echo "<p>Error: </p>" . $conn->error;
                                    }
                                }
                                else
                                {
                                    $gamesPlayed++;
                                    $sql = "UPDATE game_records SET games_played = '$gamesPlayed' WHERE id ='$id'";
                                }
                                
                                $conn->query($sql);
				
				                $conn->close();

                                print('</br><input type = "button" name = "newgamebtn" value = "PLAY AGAIN" id = "again" onclick = "window.location.href=\'index.php?page=contact\'">');
                                ?>
                                <div class = "games">
                                     <?php echo "Games Played: ".$gamesPlayed; ?>
                                </div>
                                <?php
                            }
                        ?>
                    </form>
                    </body>
                </div>
            </div>
            <div>
                <?php require_once("frontend/templates/footer.php"); ?>
            </div>
        </div>
    </body>
    <?php
    }
    else
    {
        header("Location: index.php?msg=loginpls");
    }
    ?>
</html>
<?php
