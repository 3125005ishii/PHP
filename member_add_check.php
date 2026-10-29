<!doctype html">
<html lang="ja">
    <head>
        <meta charset="UTF-8">
<title>会員登録</title>
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
if($name=='')
    {
print '会員名が入力されていません。<br>';
}
else
{
print 'ようこそ';
print $name;
print '様';print '<br>';
if($pass=='')
    {
print 'パスワードが入力されていません。<br>';
}
else
{
print 'ようこそ';
print $pass;
print '様';print '<br>';
if($email=='')
{
print 'メールアドレスが入力されていません。<br>';
}
else {
print 'メールアドレス:';
print $email;
print '<br>';
}
if($address=='')
{
print '住所が入力されていません。<br>';
}
else
{
print '住所：[';
print $address;
print '] <br>';
}
}
?>
    print 'ようこそ';
        ?>
    </body>
</html>