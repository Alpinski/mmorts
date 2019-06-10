<?php
    session_start();
    require_once("system/includes.php");

    if($maintenance == true)
    {
        echo "The site is currently under maintenance.";
    }
    elseif( $maintenance == false)
    {
        getPage();
    }
?>