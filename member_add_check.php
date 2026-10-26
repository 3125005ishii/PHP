<!doctype html">
<html lang="ja">
    <head>
        <meta charset="UTF-8">
<title>ＰＨＰ基礎</title>
    </head>
    <body>
        <?php
        <?php
$nickname=$_POST['nickname'];
$email=$_POST['email'];
$goiken=$_POST['goiken'];
$nickname= htmlspecialchars($nickname);
$email= htmlspecialchars($email);
$goiken= htmlspecialchars($goiken);
if($nickname=='')
    {
print 'ニックネームが入力されていません。<br>';
}
else
{
print 'ようこそ';
print $nickname;
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
if($goiken=='')
{
print 'ご意見が入力されていません。<br>';
}
else
{
print 'ご意見[';
print $goiken;
print '] <br>';
}
}
?>
    print 'ようこそ';
        ?>
    </body>
</html>