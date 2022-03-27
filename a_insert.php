<?php
//入力チェック
// if(
//   !isset($_POST["u_name"]) || $_POST["u_name"]=="" ||
//   !isset($_POST["l_id"]) || $_POST["l_id"]=="" ||
//   !isset($_POST["l_pw"]) || $_POST["l_pw"]==""
// ){
//   exit('ParamError');
// }

//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$u_name = $_POST["u_name"];
$l_id = $_POST["l_id"];
$l_pw = $_POST["l_pw"];

//2. DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成
$sql="INSERT INTO user_table(u_name,l_id,l_pw)
    VALUES(:u_name,:l_id,:l_pw)";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':u_name', $u_name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':l_id', $l_id, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':l_pw', $l_pw, PDO::PARAM_STR);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);

}else{
  //５．index.phpへリダイレクト
  header("Location: login.php");
  exit;

}
?>
