<?php 

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "manga_db";


$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("データベースの接続に失敗しました:" . $conn->connect_error);
}

$sql = "DELETE FROM question_table";

if($conn->query($sql) === TRUE){
    header("Location: questionnaire.php");
    exit;
} else {
    echo "データベースエラー 管理者に問い合わせください:" . $conn->error;
}

$conn->close();
?>