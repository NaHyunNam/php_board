<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'gus2625@';
    $dbName = 'board';
    $mysqli = new mysqli($host, $user, $pw, $dbName);
 
    if($mysqli){
        echo "MySQL 접속 성공";
    }else{
        echo "MySQL 접속 실패";
    }
?>