<?php 
session_start();
 $lid = $_POST["lid"];
 $lpw = $_POST["lpw"];

 try {
    $pdo = new PDO('mysql:dbname=manga_db;charset=utf8;host=localhost','root','');
 } catch(PDOException $e){
    exit('DbConnectError:'.$e->getMessage());
 }

$sql = "SELECT * FROM acount WHERE u_id=:lid AND u_pw=:lpw";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':lid',$lid);
$stmt->bindValue(':lpw',$lpw);
$res = $stmt->execute();

if($res==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}


$val = $stmt->fetch();

if($val["id"] !=""){
    $_SESSION["chk_ssid"] = session_id();
    $_SESSION["u_name"] = $val['u_name'];
  

    header("Location:index.php");
}else{
    header("Location:login.php");
}

exit();


?>