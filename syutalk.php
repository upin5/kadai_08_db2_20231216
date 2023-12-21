
SELECT * FROM manga_a_table WHERE id = 2;



<?php 




$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "manga_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("データベースに接続せきませんでした:" . $conn->connect_error);
}


if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$sql = "SELECT * FROM manga_a_table WHERE id = $id";
$result = $conn->query($sql);

if($result === false){
    die("クエリの実行に失敗しました:" . $conn->error);
}


if($result->num_rows > 0){
    $row = $result->fetch_assoc();

    echo '<span style="color: white;"> ID:' . $row["id"].'<br>';
    echo '作品名:' . $row["title"].'<br>';
    echo 'キャラ名:' . $row["chala"].'<br>';
    echo '年齢:' . $row["nenrei"] . '歳' .'<br>';
    echo '説明:<br>' ;
    echo '<span id="description"></span><br></span>';
} else {
    echo"該当するデータが見つかりませんでした";
}

$conn->close();

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>シュタルク</title>
</head>
<body style="background-color:dimgray">

<script type="text/javascript">
    var descriptionText = "<?php echo $row["content"]; ?>"; // PHPから説明テキストを取得
    var descriptionElement = document.getElementById("description");
    var currentIndex = 0;

    function displayDescription() {
        if (currentIndex < descriptionText.length) {
            descriptionElement.innerHTML += descriptionText.charAt(currentIndex);
            currentIndex++;
            setTimeout(displayDescription, 100); // 100ミリ秒ごとに次の文字を表示
        }
    }

    displayDescription();
</script>


    <div style="text-align:center">
    <img src="syuta_ono.jpg" alt="シュタ斧" style="max-width:100%; height:auto">
    </div>

</body>
</html>