<!DOCTYPE html>
<html lang="rus">
<head>
    <title>Тест формы</title>
    <meta charset="UTF-8">
</head>
<body>
<h3>Форма ввода</h3>
<form action="index.php" method="post" enctype="multipart/form-data">
    Логин<br>
    <input type="text" name="login"><br>
    Логин<br>
    <input type="password" name="pass"><br>
    Отправить<br>
    <input type="submit" value="Отправить"><br>
</form>
</body>
</html>
<?php
$post = $_POST;
echo $post['login'].' '.$post['pass'];
$i=$i+1;
$array[] = " {$post['login']} {$post['pass']}";
echo $i;


//comment
//comment
?>