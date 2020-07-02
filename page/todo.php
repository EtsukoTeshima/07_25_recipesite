<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>タイトル</title>
    <meta name="description" content="ディスクリプション">
    <link rel="stylesheet" href="../css/style.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/style.js"></script>
</head>

<body>
    アバウトページ

    <ul>
        <li><a href="../index.php">トップページ</a></li>
        <li><a href="about.html">アバウトページ</a></li>
        <li><a href="company.html">食材のたんぱく質量</a></li>
    </ul>

    <div class="todo_input">
        <form action="../todo_create.php" method="POST">
            内容: <input type="text" name="todo">
            時間: <input type="date" name="deadline">
            <button>submit</button>
        </form>
    </div>
</body>

</html>