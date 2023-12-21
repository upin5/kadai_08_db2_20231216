<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header style="font-size:20px; color:white">Fun Anime!!
<div>
    <?php 
    session_start();
    
    if(isset($_SESSION["u_name"])){
        echo "ようこそ" . $_SESSION["u_name"] . "さん";
    }else{
        echo "ようこそゲストさん";
    }
    
    
    ?>
</div>
</header>
<body style="background-color:dimgrey">
    <div style="display:flex; justify-content: center; align-items:center; margin-bottom:60px">
        <div style="display: flex; align-items: center">
        <a href="frieren_top.php">
            <img src="h_logo_modal.png" alt="フリーレンロゴ" style="width:200px; height: 100px; margin-right:60px;">
        </a>
        <a href="rikoriko.php">
            <img src="rikoriko.jpg" alt="リコリコロゴ" style="width:200px; height: 100px; margin-right:60px;">
        </a>
        </div>
    </div>

    <div style="display:flex; justify-content: center; align-items:center; margin-bottom:60px">
        <div style="display: flex; align-items: center">
        <a href="goblin.php">
            <img src="goblogo.png" alt="ゴブリンスレイヤー" style="width:200px; height: 100px; margin-right:60px;">
        </a>
        <a href="spy.php">
            <img src="spy_header_logo.png" alt="スパイファミリーロゴ" style="width:200px; height: 100px; margin-right:60px;">
        </a>
        <a href="questionnaire.php">
            <p style="color:white">スパイ適正試験を受ける</p>
        </a>
        </div>
    </div>

    <div style="display:flex; justify-content: center; align-items:center; margin-bottom:60px">
        <div style="display: flex; align-items: center">
        
        <a href="kusuriya.php">
            <img src="kusuriya_logo_tate.png" alt="くすりやのおしごと" style="width:100px; height: auto; margin-right:60px;">
        </a>
        </div>
    </div>

</body>
</html>