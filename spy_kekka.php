


    <?php 
   session_start();

    
    $que_1_val = $_SESSION['que_1_val'];
    $que_2_val = $_SESSION['que_2_val'];
    $que_3_val = $_SESSION['que_3_val'];


    $total = $que_1_val + $que_2_val + $que_3_val;
   
   
    

    if($total >=7 && $total <=9){
        $imageSrc = "anya79.jpg";
        $msg = "ちちのおしごとスパイ（アーニャ談）。あなたはスパイ適正があります。下記までご連絡を（ウソ）。";
    }elseif($total >=4 && $total <= 6){
        $imageSrc = "anya46.jpg";
        $msg = "ちちくそ真面目（アーニャ談）。あなたは一般人としては優秀ですが、スパイになるには相応の訓練が必要です。興味がある場合は下記までご連絡を（ウソ）";
    }else{
        $imageSrc = "anya_03.jpg";
        $msg = "ちち的はずれ（アーニャ談）。あなたはスパイ適正がありません。あなた自身だけでなく、周りの人を巻き込んだり、ひいては国家の存亡に関わる大惨事を引き起こす可能性があります。一般人としての生活をおすすめします。";
    }


    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>試験結果</title>
</head>
<body>   
    <?php 
     echo "あなたのスパイ適正度" . $total . "/9";
     echo '<br>';
     echo '<img src="' . $imageSrc . '" alt="アーニャ">';
     echo '<br>';
     echo $msg;
    
    ?>

    <form action="delete.php" method="post">
        <button type="submit">やりなおし</button>
    </form>
   
</body>
</html>