<?php
    include_once "connect.php";
    $user_id = $_POST['user_id'];

    $sql = "
        SELECT count(*)
        FROM TB_user
        WHERE user_id = '$user_id';
        ";
    $result = mysql_query($sql);
    $rows = mysql_num_rows($result);
    
    if($rows > 0){
        $data = mysql_fetch_array($result);
    }
    if($data[0] == 0){echo "사용 가능한 ID 입니다.";}
    else{
        echo "사용중인 ID 입니다.";
    }
?>