<?php
    require_once ("system/functions.php");
    require_once ("system/config.php");

    if($maintenance == true)
    {
        echo "The site is currently under maintenance.";
    }
    elseif( $maintenance == false)
    {
        getPage();
    }
?>