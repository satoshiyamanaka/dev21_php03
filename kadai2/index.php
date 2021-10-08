
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録画面</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">ユーザー管理画面</a></div>
            </div>
        </nav>
    </header>
    <!-- method, action, 各inputのnameを確認してください。  -->
    <form method="POST" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>ユーザー登録</legend>
                <label>名前：<input type="text" name="name"></label><br>
                <label>ログインID：<input type="text" name="lid"></label><br>
                <label>パスワード：<input type="text" name="lpw"></label><br>
                <!-- <select class="kanri_flg" name="kanri_flg" id="kanri_flg">
                    <option value="0">管理者</option>
                    <option value="1">スーパー管理者</option>
                </select><br>
                <select class="life_flg" name="life_flg" id="life_flg">
                    <option value="0">退職済み（もう会社に在籍してない人）</option>
                    <option value="1">現職</option>
                </select><br> -->
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
</body>
</html>


