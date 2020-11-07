<?php
include_once "connect.php";

$delete_bo_no = $_GET['bo_no'];

$sql = "
    DELETE FROM TB_board
    WHERE bo_no = {$delete_bo_no};
";
$result = mysqli_query($conn, $sql);

if($result == false){
    echo "
        <script>
            alert('게시글이 삭제되는 과정에서 문제가 생겼습니다.');
            location.href = 'my_board_view.php';
        </script>
    ";
}else{
    echo "
        <script>
            alert('게시글이 삭제 되었습니다.');
            location.href = 'my_board_view.php';
        </script>
    ";
}

?>