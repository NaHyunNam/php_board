<?php
    include_once "connect.php";
    $user_id = $_POST['user_id'];
    $user_pw = $_POST['user_pw'];
    $user_name = $_POST['user_name'];
    $user_phone = $_POST['user_phone'];
    $user_birth = $_POST['user_birth'];

    $sql = "INSERT INTO TB_user
        (user_id,user_pw,user_name,user_phone,user_birth)
            VALUES(
                '{$user_id}',
                '{$user_pw}',
                '{$user_name}',
                '{$user_phone}',
                '{$user_birth}'
                )";
    $result = mysqli_query($conn, $sql);
    if($result === false){
        echo '저장하는 과정에서 문제가 생겼습니다.';
    } else {
        echo "
            <script>
                alert('회원가입이 완료 되었습니다.');
                location.href = 'login.php';
            </script>
        ";
    }
    
