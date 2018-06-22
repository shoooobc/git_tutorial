<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>html</title>
</head>
<body>
<?php $hour = date('H');?>
<?php if(5<=$hour && $hour<10): ?>
    <p>おはよう</p>
<?php elseif(10<=$hour && $hour<18): ?>
    <p>こんにちわ</p>
<?php else: ?>
    <p>こんばんわ</p>
<?php endif; ?>
<p>現在<?php echo $hour; ?>時です</p>

</body>
</html>