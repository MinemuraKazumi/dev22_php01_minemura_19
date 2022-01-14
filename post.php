<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
            text-align: center;
        }

        .sub{
            margin: 70px 700px;
        }

        th{
            min-width: 150px;
            height: 70px;
            border: 1px ;
            text-align: left;
            padding-left: 10px;
        }

        td{
            min-width: 500px;
            height: 70px;
            border: 1px ;
        }


    </style>
    <title>post.php</title>
</head>

<body>
    <div class="menu">
        <h3>アンケートフォーム</h3>
        <ul>
            <p>下記の内容を入力願います</p>

            <!-- <li><a href="index.php">index.php</a></li> -->
        </ul>
    </div>
    <!-- <P>write.phpへ送る</P> -->

    <form action="write.php" method="post">
        <table border="1" rules="rows" align="center">

            <tr><th>お名前:</th><td><input type="text" name="name" style="width:400px;"></td></tr>
            <tr><th>かな: </th><td><input type="text" name="kana" style="width: 400px;"></td></tr>
            <tr><th>email : </th><td><input type="email" name="email" style="width:400px;"></td></tr>
            <tr><th>志望動機：</th><td><input type="radio" name="reason" value="起業をしたい" checked="checked">起業をしたい<input type="radio" name="reason" value="就職・転職したい" checked="checked">就職・転職したい<input type="radio" name="reason" value="その他" checked="checked">その他</td></tr>

            <tr><th>詳細: </th><td><input type="text" name="content" style="width:400px;"></td></tr>
        </table>


        <input class="sub" type="submit" value="送信">
    </form>  


  </section> 



</body>
</html>

<!-- 資料 -->
<!-- https://blog.codecamp.jp/php-explode（explode関数）
https://sukimanosukima.com/2020/12/19/html-4/ (tableの書き方とレイアウト)-->

