<?php
// keyid の設定ファイルを読み込む
require("config.php");

// APIのURLを生成
$url  = "http://api.gnavi.co.jp/RestSearchAPI/20150630/?keyid=" . $key_id . "&format=json&address=東京都国立市";

// URL読み込み
$json_data = file_get_contents($url, true);

// jsonをphpで扱いやすいように変更
$data = json_decode($json_data);
// var_dump($data);

// 配列に値(都道府県)を代入する
$pref_array = $data->rest;
//var_dump($pref_array);
var_dump($data->rest);
echo "<hr>";
echo $data->rest . "<br>";
?>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<span><a href="index.php">index.php</a></span>
</body>