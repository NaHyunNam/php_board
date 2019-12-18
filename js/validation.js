function loadJQuery() {
  var oScript = document.createElement("script");
  oScript.type = "text/javascript";
  oScript.charset = "utf-8";
  oScript.src = "http://code.jquery.com/jquery-3.3.1.min.js";
  document.getElementsByTagName("head")[0].appendChild(oScript);
}

$(function () {
  var userid_check = $('.userid_check');
  var user_id = $('#user_id');

  //아이디 빈칸 검사
  user_id.blur(function () {
    if (user_id.val() == '') {
      userid_check.text('아이디를 입력해주세요');
    } else {
      userid_check.text('아이디 중복체크를 해주세요');
    }
  });
});

jQuery(document).ready(function ($) {
  var userid_check = $('.userid_check');
  var user_id = $('#user_id');

  //아이디 빈칸 검사
  user_id.blur(function () {
    if (user_id.val() == '') {
      userid_check.text('아이디를 입력해주세요');
    } else {
      userid_check.text('아이디 중복체크를 해주세요');
    }
  });
});