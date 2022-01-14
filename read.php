<head>
    <meta charset="utf-8">
    <title>read.php</title>
</head>


<style>
    table,tr,td,th{
        border: solid 1px black; border-collapse: collapse;
    }
    td,th{
        min-width: 200px;
    }
    th{
        background: silver;
    }
    p{
        text-align: center;
    }
</style>

<p>入力結果まとめ</p>

<?php
// ファイルを開く
$file = fopen('./data/data.txt', 'r');
// ファイル内容を1行ずつ読み込んで出力
// while ($str = fgets($file)){
//     echo nl2br($str);
// }
// nl2br() ：改行タグを挿入してくれる
// ファイルを閉じる
// phpの組み込み関数fgets()：1行ずつ取得してechoしてくれる
echo '<div>';

echo '<table align="center">';
echo '<tr>';
echo '<th>日時</th>';
echo '<th>お名前</th>';
echo '<th>かな</th>';
echo '<th>email</th>';
echo '<th>志望動機</th>';
echo '<th>詳細</th>';

echo '</tr>';

while ($str = fgets($file)){
    $str2 = nl2br($str);
    // explodeで塊を1つずつに分ける
    $SeparateStr = explode(',', $str2);


    echo '<tr>';

    echo '<td>' . $SeparateStr[0] . '</td>';
    echo '<td>' . $SeparateStr[1] . '</td>';
    echo '<td>' . $SeparateStr[2] . '</td>';
    echo '<td>' . $SeparateStr[3] . '</td>';
    echo '<td>' . $SeparateStr[4] . '</td>';
    echo '<td>' . $SeparateStr[5] . '</td>';


    echo '</tr>';


} 


echo '</table>';
echo '</div>';


fclose($file);
?>