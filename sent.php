<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>reCAPTCHAテスト</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<!-- 以下を追加========================================================================== -->
<?php
if (isset($_POST["recaptchaResponse"]) && !empty($_POST["recaptchaResponse"]))
{
    $secret = "シークレットキーを記述する";
    $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$_POST["recaptchaResponse"]);
    $reCAPTCHA = json_decode($verifyResponse);
    if ($reCAPTCHA->success)
    {
      echo "認証成功";
    }
    else
    {
      echo "認証エラー";
    }
}
else
{
    echo "エラーエラー";
}
?>
<!-- ==================================================================== -->

  <div class="main">
    <div class="thanks-message">お問い合わせいただきありがとうございます。</div>
    <div class="display-contact">
      <div class="form-title">入力内容</div>

      <div class="form-item">■ 名前</div>
      <?php echo $_POST["name"]; ?>

      <div class="form-item">■ 内容</div>
      <?php echo $_POST["body"]; ?>

    </div>
  </div>
</body>
</html>