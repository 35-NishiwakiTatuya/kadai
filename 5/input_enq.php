<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<p>以下の内容で入力します。よろしければ送信ボタンを押してください。</p>
<form action="input_finish.php" method="get">
<?php


$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];
$q1 = $_GET["q1"];


echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $age;
echo "<br>";
echo $q1;
echo "<br>";

   if(isset($_GET['fCheck1'])) $sCheck1=$_GET['fCheck1']; else $sCheck1="";
   if(isset($_GET['fCheck2'])) $sCheck2=$_GET['fCheck2']; else $sCheck2="";
   if($sCheck1=="走る" && $sCheck2==""){
      echo "{$sCheck1}\n";
   }
   if($sCheck1=="" && $sCheck2=="自転車"){
      echo "{$sCheck2}\n";
   }
   if($sCheck1=="走る" && $sCheck2=="自転車"){
      echo "{$sCheck1}と{$sCheck2}\n";
   }
   if($sCheck1=="" && $sCheck2==""){
      echo "チェックされていません。\n";
   }

 ?>
<input type="submit" />




</body>
</html>