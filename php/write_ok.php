<?php
session_start();

include_once "connect.php";

$bo_title = $_POST['bo_title'];
$bo_text = $_POST['bo_text'];
$user_id = $_SESSION['id'];


$sql = "
    INSERT INTO TB_board(
        bo_title,
        bo_text,
        bo_regdate,
        bo_editdate,
        bo_regno
        )
    SELECT
        '{$bo_title}',
        '{$bo_text}',
        now(),
        now(),
        user_no
    FROM TB_user
    WHERE user_id = '{$user_id}'
    ;
";

$result = mysqli_query($conn, $sql);

if($result == false){
    echo "
        <script>
            alert('게시글을 저장하는 과정에서 문제가 생겼습니다.');
            location.href = 'write.php';
        </script>
    ";
}else{
    echo "
        <script>
            alert('게시글이 저장되었습니다.');
            location.href = 'index.php';
        </script>
    ";
}
?>