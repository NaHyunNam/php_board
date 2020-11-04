<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'gus2625@';
    $dbName = 'board';
    $mysqli = new mysqli($host, $user, $pw, $dbName);
 
    if($mysqli){
    }else{
        echo "MySQL 접속 실패";
    }

    $conn = mysqli_connect($host, $user, $pw, $dbName);
?>