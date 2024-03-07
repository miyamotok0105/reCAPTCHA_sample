<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>reCAPTCHAテスト</title>
  <link rel="stylesheet" type="text/css" href="style.css">

  <!-- 以下を追加する========================================================= -->
  <script src="https://www.google.com/recaptcha/api.js?render=サイトキーを記述する"></script>
  <script>
      grecaptcha.ready(function () {
        grecaptcha.execute("サイトキーを記述する", {action: "sent"}).then(function(token) {
          var recaptchaResponse = document.getElementById("recaptchaResponse");
          recaptchaResponse.value = token;
        });
      });
  </script>
  <!-- ==================================================================== -->

</head>
<body>
<div class="main">
  <div class="contact-form">
    <div class="form-title">
      お問い合わせ
    </div>
    <form method="post" action="sent.php">

      <div class="form-item">名前</div>
      <input type="text" name="name">

      <div class="form-item">内容</div>
      <textarea name="body"></textarea>

      <!-- 以下を追加する===================================================== -->
      <input type="hidden" name="recaptchaResponse" id="recaptchaResponse">
      <!-- ================================================================ -->

      <input type="submit" value="送信">
    </form>

  </div>
</div>
</body>
</html>