<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    session_start();

    if (isset($_SESSION['contador'])) {
        $contador = $_SESSION['contador'];
    }else{
        $contador = 0;
    }
    
    echo $contador++;
?>