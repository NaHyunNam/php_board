<?php
include_once "connect.php";

$alter_bo_no = $_POST['alter_bo_no'];
$alter_bo_title = $_POST['alter_bo_title'];
$alter_bo_text = $_POST['alter_bo_text'];

$sql = "
    UPDATE TB_board
    SET
        bo_title = '{$alter_bo_title}',
        bo_text = '{$alter_bo_text}',
        bo_editdate = now()
    WHERE bo_no = {$alter_bo_no}
";

$result = mysqli_query($conn, $sql);
if($result == false) {
    echo "
        <script>
            alert('게시글 수정에 문제가 생겼습니다.');
            location.href = 'board_alter.php?bo_no={$alter_bo_no}';
        </script>
    ";
}else {
    echo "
        <script>
            alert('게시글 수정이 완료 되었습니다.');
            location.href = 'my_board_view.php';
        </script>
    ";
}

?>