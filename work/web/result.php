<?php

require('../app/functions.php');

$message = trim(filter_input(INPUT_GET, 'message'));
$message = $message !== '' ? $message : '...';

include('../app/_parts/_header.php');

?>

  <p><?= h($message); ?></p>
  <p><a href="index2.php">Go back</a></p>

<?php

include('../app/_parts/_footer.php');