<?php
session_start();

//POST値
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];

//DB接続
include("funcs.php");
$pdo = db_conn();

//データ登録SQL作成
$sql = "SELECT * FROM user_table WHERE l_id=:lid  AND l_pw=:lpw";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':lid',$lid);
$stmt->bindValue(':lpw',$lpw);
$res = $stmt->execute();

//SQL実行時にエラーがある場合
if($res==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}

//抽出データ数を取得
$val = $stmt->fetch(); //1レコードだけ取得する方法

//該当レコードがあればSESIONに値を代入
$pw = password_verify($lpw, $val["lpw"]);
if( $val["id"] != "" ){
    //Login成功時
    $_SESSION["chk_ssid"] = session_id();//自分のSESSION IDを取得
    $_SESSION["u_name"] = $val['u_name'];
    
    //Login処理OKの場合select.phpへ遷移
    header("Location: ../sukomane/bootstrap/index.php");
}else{
    //Login処理NGの場合login.phpへ遷移
    header("Location: login.php");
}
//処理終了
exit();

?>