$(function () {
  var userid_check = $('.userid_check');
  var user_id = $('#user_id');
  var signup_ok_check = $('.signup_ok_check');
  var signup_btn = $('#signup_btn');

  //아이디 빈칸 검사
  user_id.blur(function () {
    if (user_id.val() == '') {
      signup_ok_check.val(1);
      userid_check.html("<span style='color : red; font-weight: bold;'>아이디를 입력해주세요<span>");
      $().signup_ok_check();
    } else if (user_id.val().length > 3 && user_id.val().length < 16) {
      signup_ok_check.val(0);
      userid_check.html("");
      $().signup_ok_check();
    } else{
      signup_ok_check.val(1);
      userid_check.html("<span style='color : red; font-weight: bold; margin-bottom: 5px;'>아이디를 4 ~ 15자리로 입력해주세요<span>");
      $().signup_ok_check();
    }
  });

   $.fn.signup_ok_check = function () {
    if (signup_ok_check.val() == 0){
      signup_btn.prop("disabled", false);
    }else{
      signup_btn.prop("disabled", true);
    }
  };

});

