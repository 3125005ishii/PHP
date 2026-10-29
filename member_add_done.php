<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ＰＨＰ基礎</title>
</head>
<body>
<?php
$name=$_POST['name'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$address=$_POST['address'];
$name= htmlspecialchars($name);
$pass= htmlspecialchars($pass);
$email= htmlspecialchars($email);
$address= htmlspecialchars($address);
print $name;
print '様<br>';
print 'ご意見ありがとうございました<br>';
print '頂いたご意見『';
print $goiken;
print ']<br>';
print $email;
print 'にメールを送りましたのでご確認ください。';
?>
</body>
</html>