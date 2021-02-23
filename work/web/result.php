<?php

require('../app/functions.php');

$message = filter_input(INPUT_GET, 'message');
$usename = filter_input(INPUT_GET, 'usename');

include('../app/_parts/_header.php');

?>

<p><?= h($message); ?> by <?= h($usename); ?></p>
<p><a href="index2.php">Go back</a></p>
<?php

include('../app/_parts/_footer.php');