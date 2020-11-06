<?php
include_once "connect.php";

$sql = "
    SELECT 
        bo_no,
        bo_title,
        bo_text,
        bo_regdate,
        bo_editdate,
        user_name
    FROM TB_user AS u, TB_board AS b
    WHERE u.user_no = b.bo_regno;
";

echo $sql;

$result = mysqli_query($conn, $sql);

?>