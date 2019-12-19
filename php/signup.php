<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>borad_page_signup</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <!-- <script type="text/javascript" src="../js/validation.js"></script> !-->
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="../js/validation.js"></script>
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">회원가입을 해주세요</h1>
              </div>
              <form class="user">
                <div class="form-group row">
                  <div class="col-sm-9 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="user_id" placeholder="아이디를 4 ~ 15자리로 입력해주세요">
                  </div>
                  <div class="col-sm-3">
                    <input type="button" class="form-control btn btn-info btn-icon-split" id="exampleRepeatPassword" value="중복검사">
                  </div>
                </div>
                  <div class="form-group user_id_check"></div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="user_pw" placeholder="비밀번호를 8 ~ 20자리로 입력해주세요">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="user_pw2" placeholder="비밀번호 확인을 8 ~ 20자리로 입력해주세요">
                  </div>
                </div>
                <div class="form-group user_pw_check"></div>
                <div class="form-group user_pw2_check"></div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="user_name" placeholder="이름을 입력해주세요">
                </div>
                <div class="form-group user_name_check"></div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="user_phone" placeholder="휴대폰 번호를 입력해주세요">
                </div>
                <div class="form-group user_phone_check"></div>
                <div class="form-group">
                  <input type="date" class="form-control form-control-user" id="user_birth">
                </div>
                <div class="form-group user_birth_check"></div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="user_email" placeholder="이메일을 입력해주세요">
                  </div>
                  <div class="col-sm-1">
                    <span style="font-size: 25pt;font-weight: bold;">@</span>
                  </div>
                  <div class="col-sm-5">
                    <input list="user_email_domain" name="user_email2" class="form-control form-control-user" placeholder="이메일을 선택해주세요" id="user_email2">
                    <datalist id="user_email_domain">
                      <option value="naver.com" seleted>
                      <option value="google.com">
                      <option value="daum.net">
                      <option value="nate.com">
                    </datalist>
                  </div>
                </div>
                <div class="form-group user_email_check"></div>
                <div class="form-group user_email2_check"></div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input list="pw_q" name="pw_q" class="form-control form-control-user" placeholder="비밀번호 찾기 질문을 선택해주세요" id="user_pw_q">
                    <datalist id="pw_q">
                      <option value="기억남는 장소는?" seleted>
                      <option value="초등학교 이름은?">
                      <option value="가장 생각나는 사람의 이름은?">
                      <option value="가장 기억남는 선생님 성함은?">
                    </datalist>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="user_pw_a"
                      placeholder="비밀번호 찾기 답변을 입력해주세요">
                  </div>
                </div>
                <div class="form-group user_pw_q_check"></div>
                <div class="form-group user_pw_a_check"></div>
                <input type="hidden" class="signup_ok_check" name="signup_ok_check" value="0">
                <input type="button" class="btn btn-primary btn-user btn-block" value="회원가입" id="signup_btn" disabled>
                <hr>
                <a href="index.php" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> 구글 계정으로 회원가입
                </a>
                <a href="index.php" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> 페이스북 계정으로 회원가입
                </a>
              </form>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>
