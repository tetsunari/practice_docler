<?php

$today = date('Y-m-d H:i:s l');

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP Practice</title>
</head>
<body>
  <p>Hello, PHP!</p>
  <p>Today: <?php echo date('y-m-d h:i:s l'); ?></p>
  <!-- 小文字のyだと2021の21の表示、小文字のhだと午前午後の12表現 -->
  <p>Today: <?= date('y-m-d h:i:s l'); ?></p>
  <!-- でもいける -->
  <p>Today: <?= $today; ?></p>
</body>
</html>