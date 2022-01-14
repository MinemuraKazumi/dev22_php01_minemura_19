<?php

$name = $_POST['name'];
$kana = $_POST['kana'];
$email = $_POST['email'];
$reason = $_POST['reason'];
$content = $_POST['content'];


// 悪意をブロック scriptタグ等を無効化する
$name = htmlspecialchars($name, ENT_QUOTES);
$kana = htmlspecialchars($kana, ENT_QUOTES);
$email = htmlspecialchars($email, ENT_QUOTES);
$reason = htmlspecialchars($reason, ENT_QUOTES);
$content = htmlspecialchars($content, ENT_QUOTES);

$date = date('Y/m/d H:i:s');
// explodeで分割できるように','で分けておく
$str = $date. ',' . $name. ',' . $kana. ',' . $email. ',' .$reason. ',' .$content;

// $str = $name . $mail . $password;

// ファイルの用意
$file = fopen('./data/data.txt', 'a');

// 書き込み
// fwrite($file, $date . "\n");
fwrite($file, $str . "\n");

// ファイルをクローズ
fclose($file);

?>
<html>

<head>
    <meta charset="utf-8">
    <style>
        p,ul {
            text-align: center;
        }


        th{
            min-width: 150px;
            height: 70px;
            border: 1px ;
        }

        td{
            min-width: 500px;
            height: 70px;
            border: 1px ;
        }


    </style>
    <title>write.php</title>
</head>

<body>
    <p>入力結果</p>
    <table border="1" rules="rows" align="center">
        <tr><th>お名前： </th><td><?= $name; ?></td></tr>
        <tr><th>カナ： </th><td><?= $kana; ?></td></tr>
        <tr><th>メールアドレス： </th><td><?= $email; ?></td></tr>
        <tr><th>志望動機： </th><td><?= $reason; ?></td></tr>
        <tr><th>詳細： </th><td><?= $content; ?></td></tr>
    </table>




    <ul>
        <a href="read.php">まとめに移動する</a>
    </ul>
</body>
</html>

