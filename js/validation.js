$(function () {
  var user_id_check = $('.user_id_check'); // 아이디 벨리데이션 글 표시
  var user_pw_check = $('.user_pw_check'); // 패스워드 벨리데이션 글 표시
  var user_pw2_check = $('.user_pw2_check') // 패스워드 확인 벨리데이션 글 표시
  var user_name_check = $('.user_name_check') // 유저 이름 벨리데이션 글 표시
  var user_phone_check = $('.user_phone_check') // 유저 전화번호 벨리데이션 글 표시
  var user_birth_check = $('.user_birth_check') // 유저 생일 벨리데이션 글 표시
  var user_email_check = $('.user_email_check') // 유저 이메일 앞자리 벨리데이션 글 표시
  var user_email2_check = $('.user_email2_check') // 유저 이메일 뒷자리 벨리데이션 글 표시
  var user_pw_q_check = $('.user_pw_q_check') // 유저 비밀번호 질문 벨리데이션 글 표시
  var user_pw_a_check = $('.user_pw_a_check') // 유저 비밀번호 질문 답변 벨리데이션 글 표시
  var user_id = $('#user_id'); // 아이디 input
  var user_pw = $('#user_pw'); // 패스워드 input
  var user_pw2 = $('#user_pw2'); // 패스워드 확인 input
  var user_name = $('#user_name'); // 이름 input
  var user_phone = $('#user_phone'); // 전화번호 input
  var user_birth = $('#user_birth'); // 생일 input
  var user_email1 = $('#user_email1'); // 이메일 앞자리 input
  var user_email2 = $('#user_email2'); // 이메일 뒷자리 input
  var user_pw_q1 = $('#user_pw_q1'); // 유저 비밀번호 질문 input
  var user_pw_a = $('#user_pw_a'); // 유저 비밀번호 질문 답변 input
  var user_id_ok, user_pw_ok, user_pw2_ok, user_name_ok, user_phone_ok, user_birth_ok, user_email_ok, user_email2_ok, user_pw_q_ok, user_pw_a_ok = 0; // 각 항목 벨리데이션 확인 값
  //var signup_ok_check = $('.signup_ok_check'); // 회원가입 벨리데이션 확인 input hidden
  var signup_btn = $('#signup_btn'); // 회원가입 버튼


  //아이디 벨리데이션 검사
  user_id.blur(function () {
    if (user_id.val() == '') {
      user_id_ok = 1;
      user_id_check.html("<span style='color : red; font-weight: bold;'>아이디를 입력해주세요<span>");
      $().signup_ok_check();
    } else if (user_id.val().length > 3 && user_id.val().length < 16) {
      user_id_ok = 0;
      user_id_check.html("");
      $().signup_ok_check();
    } else{
      user_id_ok = 1;
      user_id_check.html("<span style='color : red; font-weight: bold; margin-bottom: 5px;'>아이디를 4 ~ 15자리로 입력해주세요<span>");
      $().signup_ok_check();
    }
  });

  // 패스워드 벨리데이션 검사
  user_pw.blur(function () {
    if (user_pw.val() == '') {
      user_pw_ok = 1;
      user_pw_check.html("<span style='color : red; font-weight: bold;'>비밀번호를 입력해주세요<span>");
      $().signup_ok_check();
    } else if (user_pw.val().length > 7 && user_pw.val().length < 21) {
      user_pw_ok = 0;
      user_pw_check.html("");
      $().signup_ok_check();
    } else {
      user_pw_ok = 1;
      user_pw_check.html("<span style='color : red; font-weight: bold; margin-bottom: 5px;'>비밀번호를 8 ~ 20자리로 입력해주세요<span>");
      $().signup_ok_check();
    }
  });

  // 패스워드 확인 벨리데이션 검사
  user_pw2.blur(function () {
    if (user_pw2.val() == '') {
      user_pw2_ok = 1;
      user_pw2_check.html("<span style='color : red; font-weight: bold;'>비밀번호를 확인을 입력해주세요<span>");
      $().signup_ok_check();
    } else if (user_pw.val() == user_pw2.val()) {
      user_pw2_ok = 0;
      user_pw2_check.html("");
      $().signup_ok_check();
    } else {
      user_pw2_ok = 1;
      user_pw2_check.html("<span style='color : red; font-weight: bold; margin-bottom: 5px;'>비밀번호 확인을 비밀번호와 동일하게 입력해주세요<span>");
      $().signup_ok_check();
    }
  });

  // 이름 벨리데이션 검사
  user_name.blur(function () {
    if (user_name.val() == '') {
      user_name_ok = 1;
      user_name_check.html("<span style='color : red; font-weight: bold;'>이름을 입력해주세요<span>");
      $().signup_ok_check();
    } else {
      user_name_ok = 0;
      user_name_check.html("");
      $().signup_ok_check();
    }
  });

  // 전화번호 벨리데이션 검사
  user_phone.blur(function () {
    if (user_phone.val() == '') {
      user_phone_ok = 1;
      user_phone_check.html("<span style='color : red; font-weight: bold;'>전화번호를 입력해주세요<span>");
      $().signup_ok_check();
    } else {
      user_phone_ok = 0;
      user_phone_check.html("");
      $().signup_ok_check();
    }
  });

  // 생일 벨리데이션 검사
  user_birth.blur(function () {
    if (user_birth.val() == '') {
      user_birth_ok = 1;
      user_birth_check.html("<span style='color : red; font-weight: bold;'>생일을 선택해주세요<span>");
      $().signup_ok_check();
    } else {
      user_birth_ok = 0;
      user_birth_check.html("");
      $().signup_ok_check();
    }
  });
  
  // 이메일 앞자리 벨리데이션 검사
  user_email1.blur(function () {
    if (user_email1.val() == '') {
      user_email1 = 1;
      user_email_check.html("<span style='color : red; font-weight: bold;'>이메일 앞자리를 입력해주세요<span>");
      $().signup_ok_check();
    } else {
      user_email_ok = 0;
      user_email_check.html("");
      $().signup_ok_check();
    }
  });

  // 이메일 뒷자리 벨리데이션 검사
  user_email2.blur(function () {
    if (user_email2.val() == '') {
      user_email2_ok = 1;
      user_email2_check.html("<span style='color : red; font-weight: bold;'>이메일 뒷자리를 선택해주세요<span>");
      $().signup_ok_check();
    } else {
      user_email2_ok = 0;
      user_email2_check.html("");
      $().signup_ok_check();
    }
  });

  // 유저 비밀번호 질문 벨리데이션 검사
  user_pw_q1.blur(function () {
    if (user_pw_q1.val() == '') {
      user_pw_q_ok = 1;
      user_pw_q_check.html("<span style='color : red; font-weight: bold;'>비밀번호 찾기 질문을 선택해주세요<span>");
      $().signup_ok_check();
    } else {
      user_pw_q_ok = 0;
      user_pw_q_check.html("");
      $().signup_ok_check();
    }
  });

  // 유저 비밀번호 질문 답변 검사
  user_pw_a.blur(function () {
    if (user_pw_a.val() == '') {
      user_pw_a_ok = 1;
      user_pw_a_check.html("<span style='color : red; font-weight: bold;'>비밀번호 찾기 답변을 입력해주세요<span>");
      $().signup_ok_check();
    } else {
      user_pw_a_ok = 0;
      user_pw_a_check.html("");
      $().signup_ok_check();
    }
  });

  // 회원가입 버튼 활성화 비활성화 함수
   $.fn.signup_ok_check = function () {
     if (user_id_ok == 0 && user_pw_ok == 0 && user_pw2_ok == 0 && user_name_ok == 0 && user_phone_ok == 0 && user_birth_ok == 0 && user_email_ok == 0 && user_email2_ok == 0 && user_pw_q_ok == 0 && user_pw_a_ok == 0){
      signup_btn.prop("disabled", false);
    }else{
      signup_btn.prop("disabled", true);
    }
  };

});

