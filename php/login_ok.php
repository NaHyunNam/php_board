<?php
session_start();
include_once 'connect.php';
$login_user_id = $_POST['login_user_id'];
$login_user_pw = $_POST['login_user_pw'];

$sql1 = "
    SELECT user_id, user_name 
    FROM TB_user 
    WHERE user_id = '{$login_user_id}'
    AND user_pw = '{$login_user_pw}';
    ";

$result = mysqli_query($conn, $sql1);
$result_row = $result->num_rows;
$row = mysqli_fetch_array($result);
if($result_row > 0){
    $session_name = $_SESSION['id'] = $row['user_id'];
    $session_name = $_SESSION['name'] = $row['user_name'];
    echo "
        <script>
            alert('{$session_name}님 환영합니다.');
            location.href='index.php';
        </script>
    ";
}else{
    echo "
        <script>
            alert('로그인에 실패하였습니다. 다시 로그인을 해주세요');
            location.href='login.php';
        </script>
    ";
}

?>