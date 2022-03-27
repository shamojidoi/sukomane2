<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<form class="login-form" method="post" action="login_act.php">
    <h1 style="color: #fff;font-family: 'Roboto',serif;">SUKOMANE</h1>
  <p class="login-text">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-lock fa-stack-1x"></i>
    </span>
  </p>
  <input type="id" class="login-username" autofocus="true" required="true" placeholder="ID" name="lid"/>
  <input type="password" class="login-password" required="true" placeholder="Password" name="lpw"/>
  <input type="submit" name="Login" value="Login" class="login-submit" />
</form>
<a href="a_index.php" class="login-forgot-pass">create new account</a>
<div class="underlay-photo"></div>
<div class="underlay-black"></div> 
        
</body>
</html>