<?php

session_start();

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "manga_db";

$selected_text_1 = $_POST['selected_text_1'];
$selected_text_2 = $_POST['selected_text_2'];
$selected_text_3 = $_POST['selected_text_3'];

$point_mapping = array(
    'a' => 1,
    'b' => 2,
    'c' => 3,
    'd' => 1,
    'e' => 2,
    'f' => 3,
    'g' => 1,
    'h' => 2,
    'i' => 3,
    'n' => 0,

);

$point_1 = $point_mapping[$selected_text_1];
$point_2 = $point_mapping[$selected_text_2];
$point_3 = $point_mapping[$selected_text_3];

$current_datetime = date("Y-m-d H:i:s");


$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("データベースの接続に失敗しました：" . $conn->connect_error);
}

$sql = "INSERT INTO question_table (que_1_val, que_2_val, que_3_val, day) VALUES ('$point_1','$point_2','$point_3','$current_datetime' )";

if($conn->query($sql) === TRUE){
    echo "データが正常に登録されました";
    $_SESSION['que_1_val'] = $point_1;
    $_SESSION['que_2_val'] = $point_2;
    $_SESSION['que_3_val'] = $point_3;
    echo '<br><a href="spy_kekka.php">結果を見る</a>';
}else{
    echo "データベースエラー：" . $conn->error;
}




$conn->close();



?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p style="size:40px; color:red; text-align:center; font-weight:bold;">試験おつかれさまでした！結果は以下のページで受け取れます</p>
    <!-- <div style="text-align:center">
    <a href="spy_kekka.php">試験結果</a>
    </div> -->
    <div style="display:flex; justify-content: center; align-items:center">
    <img src="spy_family_3.jpg">
    </div>
</body>
</html>