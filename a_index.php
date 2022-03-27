<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザー登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
  <link rel="stylesheet" href="n_login.css">
</head>
<body>

<!-- Head[Start] -->
<!-- <header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="login.php">Login画面</a></div>
    </div>
  </nav>
</header> -->
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- <form method="post" action="a_insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>new account create</legend>
     <label>USER NAME：<input type="text" name="u_name"></label><br>
     <label>ID：<input type="text" name="l_id"></label><br>
     <label>PASSWORD：<input type="text" name="l_pw"></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form> -->

<form class="login-form" method="post" action="a_insert.php">
    <h1 style="color: #fff;font-family: 'Roboto',serif;">Create new account</h1>
  <p class="login-text">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-lock fa-stack-1x"></i>
    </span>
  </p>
  <input type="name" class="login-username" autofocus="true" required="true" placeholder="NAME" name="u_name"/>
  <input type="id" class="login-username" autofocus="true" required="true" placeholder="ID" name="l_id"/>
  <input type="password" class="login-password" required="true" placeholder="Password" name="l_pw"/>
  <input type="submit" name="Login" value="Submit" class="login-submit" />
</form>
<a href="login.php" class="login-forgot-pass">Login</a>
<div class="underlay-photo"></div>
<div class="underlay-black"></div> 
<!-- Main[End] -->


</body>
</html>
