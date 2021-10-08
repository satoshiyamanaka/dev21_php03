<?php
require_once('funcs.php');
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM gs_user_table');
$status = $stmt->execute();

//３．データ表示
$view = '';
if ($status == false) {
    sql_error($status);
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //GETデータ送信リンク作成
        // <a>で囲う。
        $view .= '<p>';
        $view .= '<a href="detail.php?id=' . $result['id'] . '">';
        $view .= $result['name'] . '：' . $result['lid'] . '：' . $result['lpw'];
        $view .= '</a>';

    $view .= '<a href="delete.php?id=' . $result['id'] . '">';
    $view .= ' [削除] ';
    $view .= '</a>';

        $view .= '</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>表示</title>
    <style type="text/css">
        header{
            font-size: larger;
            margin: 20px 20px 40px 20px;
            background-color: cyan;
            text-align: center;
            margin:40px 40px 40px 40px;
            }
            .navbar-header{
                text-align: center;
            }
        .jumbotron{
            text-align: center;
        }

        body{
            text-align: center;
            margin: 20px 0 20px 20px;
            }
    </style>
</head>

<body id="main">
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">ユーザー登録画面へ</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <div>
        <div class="container jumbotron">
            <a href="detail.php"></a>
            <?= $view ?>
        </div>
    </div>
    <!-- Main[End] -->

</body>

</html>