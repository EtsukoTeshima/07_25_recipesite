<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>タイトル</title>
    <meta name="description" content="ディスクリプション">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/style.js"></script>
</head>

<body>
    <!-- ヘッダー -->
    <header class="PC_header">
        <div class="logo"><img src="img/okomekun.png" alt="" width="100px" height=100px></div>
        <div class="headertitle">管理栄養士のレシピ</div>
        <ul>
            <li><a href="index.php">トップページ</a></li>
            <li><a href="page/todo.php">レシピ一覧</a></li>
            <li><a href="page/about.html">レシピ検索</a></li>
            <li><a href="page/company.html">レシピ詳細</a></li>
        </ul>
    </header>
    <!-- メインビジュアル -->
    <div class="mainvisual"></div>
    <a href="recipe_read.php">一覧画面</a>
    <form action="recipe_create.php" method="POST">
        料理名: <input type="text" name="recipename"><br>
        材料・作り方: <textarea name="howto" id="howto" cols="40" rows="10"></textarea><br>
        <div><input type="file" name="recipe_image" accept="image/*"></div>

        <button>送信</button>
    </form>
</body>

</html>


<!-- <div>
            レシピカテゴリ: <select name="recipecategory" id="">
                <option value="">選択してください</option>
                <option value="1">ダイエットレシピ</option>
                <option value="2">筋トレレシピ</option>
                <option value="3">骨活レシピ</option>
                <option value="4">最強トーストレシピ</option>
                <option value="5">その他</option>
            </select>
        </div> -->