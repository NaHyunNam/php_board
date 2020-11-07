<?php
include_once "connect.php";

$delete_co_no = $_GET['co_no'];
$delete_bo_no = $_GET['bo_no'];

$sql = "
    DELETE FROM TB_comment
    WHERE co_no = {$delete_co_no};
";
$result = mysqli_query($conn, $sql);

if($result == false){
    echo "
        <script>
            alert('댓글이 삭제되는 과정에서 문제가 생겼습니다.');
            location.href = 'board_detail_view.php?bo_no={$delete_bo_no}';
        </script>
    ";
}else{
    echo "
        <script>
            alert('댓글이 삭제 되었습니다.');
            location.href = 'board_detail_view.php?bo_no={$delete_bo_no}';
        </script>
    ";
}

?>