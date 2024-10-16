<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

$sql = "insert into contactform(name, mail, age, comments) values(?,?,?,?)";
$stmt = $pdo->prepare($sql);


$stmt->bindValue(1, $_POST['name']);
$stmt->bindValue(2, $_POST['mail']);
$stmt->bindValue(3, $_POST['age']);
$stmt->bindValue(4, $_POST['comments']);

$stmt->execute();

?>

<!doctype HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>お問合わせフォームを作る</title>
    <link rel="stylesheet"type="text/css"href="style2.css">
</head>

<body>

    <h1>お問合せフォーム</h1>

    <div class="confirm">
    <p>
        お問い合わせ有難うございました。<br>3営業日以内に担当者よりご連絡差し上げます。
    </p>
    </div>

</body>
</html>