<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questionnaire</title>
</head>
<header style="text-align:center;">
    <img src="spy_header_logo.png" style="display: inline-block;">
</header>
<body style="background-color:dimgrey">
        <form action="process.php" method="POST">
            <div>
            <label for="text" style="color:white; font-size:30px; font-weight:bold;">適正検査【１】</label>
            <p style="font-size:24px; color:white;">「あなたの目の前でスリの現場を発見しました。どうしますか？」</p>
            <select name="selected_text_1" id="text_1" required style="width:auto; font-size: 20px; font-weight:bold; margin-bottom:20px;">
                <option value="n">---選んでください---</option>
                <option value="a">スリを追う</option>
                <option value="b">気づかれないようにスリ返して、持ち主に返す</option>
                <option value="c">ぶっとばしてくさい飯食わせる</option>

            </select>
            </div>
            <div>
            <label for="text" style="color:white; font-size:30px; font-weight:bold;">適正検査【２】</label>
            <p style="font-size:24px; color:white;">「任務のために、子供が必要になりました。あなたならどうしますか？」</p>
            <select name="selected_text_2" id="text_2" required style="width:auto; font-size: 20px; font-weight:bold; margin-bottom:20px;">
                <option value="n">---選んでください---</option>
                <option value="d">自分が子供になる</option>
                <option value="e">子供に見える大人を雇う</option>
                <option value="f">頭に三角コーンみたいな飾りをつけた女の子を孤児院から引き取る</option>
            </select>
            </div>

            <div>
                <label for="text" style="color:white; font-size:30px; font-weight:bold;">適正検査【３】</label>
                <p style="font-size:24px; color:white;">「休暇中の豪華客船で爆弾を見つけました。あなたはどうしますか？」</p>
                <select name="selected_text_3" id="text_3" required style="width:auto; font-size: 20px; font-weight:bold; margin-bottom:20px;">
                    <option value="n">---選択してください---</option>
                    <option value="g">一人ボートで逃げる</option>
                    <option value="h">やたら強い奥さんに解除を頼む</option>
                    <option value="i">怪しまれない人物に変装して自分が解除する</option>
                </select>
            </div>

            <div>
                <button type="submit">試験結果へ</button>
            </div>
        </form>






</body>
</html>