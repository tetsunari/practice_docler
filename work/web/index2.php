<?php

require('../app/functions.php');

$names = [
  // 'taro',
  // 'jiro',
  // 'saburo',
];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP Practice</title>
</head>
<body>
  <ul>

  <?php if (empty($nmaes)) { ?>
    <li>Nobady!</li>
  <?php } else { ?>
    <?php foreach ($names as $name) { ?>
      <li><?= h($name); ?></li>
    <?php } ?>
  <?php } ?>

  </ul>
</body>
</html>