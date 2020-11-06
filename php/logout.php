<?php
session_start();

if($_SESSION['id'] != null){
    session_destroy();
}

echo "
    <script>
        alert('로그아웃 되셨습니다.');
        location.href = 'index.php';
    </script>
";
?>