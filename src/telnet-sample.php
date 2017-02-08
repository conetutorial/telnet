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
$result = $telnet->exec('show users');

// 接続を閉じます。
$telnet->disconnect();

echo "<pre>" . $result . "</pre>";
?>