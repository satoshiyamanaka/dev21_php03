<!-- detail -->

<?php
require_once('funcs.php');
$pdo = db_conn();
$id = $_GET['id'];

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM gs_bm_table WHERE id =' . $id . ';');
$status = $stmt->execute();

//３．データ表示
$view = '';
if ($status == false) {
    sql_error($status);
} else {
    $row = $stmt->fetch();
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>フリーアンケート表示</title>
    <link rel="stylesheet" href="css/range.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body id="main">
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">データ登録</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="POST" action="bm_update.php">
        <div class="jumbotron">
            <fieldset>
                <legend>ブックマーク更新</legend>
                <label>書籍名：<input type="text" name="name" value="<?= h($row['name']) ?>" ></label><br>
                <label>書籍URL：<input type="text" name="url" value="<?= h($row['url']) ?>"></label><br>
                <label>書籍内容：<textarea name="content" rows="4" cols="40"><?= h($row['content']) ?></textarea></label><br>
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <input type="submit" value="更新">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->
</body>

</html>