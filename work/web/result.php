<?php

require('../app/functions.php');

$colorFromGet = filter_input(INPUT_GET, 'color') ?? 'transparent';
setcookie('color', $colorFromGet);
//setcookieの前でechoや、PHP の開始タグの前に HTML を書いたりしてはいけないので、注意しておきましょう。

include('../app/_parts/_header.php');

?>

  <p><?= h($colorFromGet); ?></p>
  <p><a href="index2.php">Go back</a></p>

<?php

include('../app/_parts/_footer.php');