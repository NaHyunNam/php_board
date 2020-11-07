<?php
session_start();
include_once "connect.php";

$co_text = $_POST['co_text'];
$co_bono = $_POST['co_bono'];
$user_id = $_SESSION['id'];
$sql = "
    INSERT INTO TB_comment(
        co_text,
        co_regdate,
        co_editdate,
        co_bono,
        co_regno
    )
    SELECT
        '{$co_text}',
        now(),
        now(),
        {$co_bono},
        user_no
    FROM TB_user
    WHERE user_id = '{$user_id}'
    ;
";

$result = mysqli_query($conn, $sql);

if($result == false){
    echo "
        <script>
            alert('댓글 등록을 실패했습니다.');
            location.href='board_detail_view.php?bo_no={$co_bono}';
        </script>
    ";
}else{
    echo "
        <script>
            alert('댓글이 등록 되었습니다.');
            location.href='board_detail_view.php?bo_no={$co_bono}';
        </script>
    ";
}

?>

