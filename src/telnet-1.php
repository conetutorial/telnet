<?php
// ライブラリを利用できるようにしています。
use miyahan\network\Telnet;

// 別ファイルにて事前準備をしています。
require_once 'bootstrap.php';

// 設定値を取得しています。
$ip = getenv('host');
$user = getenv('user');
$password = getenv('password');
$type = getenv('type');

// Telnet接続用のオブジェクトを生成しています。
$telnet = new Telnet($ip);

$telnet->connect();
$telnet->login($user, $password, $type);
// プロンプトとして表示される内容を見分けがつくように教えています。
$telnet->setPrompt('PHPLEC02>');

// コマンドを実行し、結果の内容を取得しています。
$users = $telnet->exec('show users');
$clock = $telnet->exec('show clock');
$cca = $telnet->exec('show cca');

// 接続を閉じます。
$telnet->disconnect();
?>
<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Telnetを使った情報取得サンプル</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script></head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                Telnetを使ったサンプルコード
            </a>
        </div>
    </div>
</nav>
<div class="container">
    <dl>
        <dt>Users</dt>
        <dd>
            <pre><?= $users ?></pre>
        </dd>
    </dl>
    <dl>
        <dt>Clock</dt>
        <dd>
            <pre><?= $clock ?></pre>
        </dd>
    </dl>
    <dl>
        <dt>cca</dt>
        <dd>
            <pre><?= $cca ?></pre>
        </dd>
    </dl>
</div>
</body>
</html>

