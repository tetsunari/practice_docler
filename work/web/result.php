<?php

require('../app/functions.php');

// $color = filter_input(INPUT_GET, 'color');
// $color = isset($color) ? $color : 'None selected';
// $color = $color ?? 'None selected';  //上二つと同じ動き
$color = filter_input(INPUT_GET, 'color') ?? 'None selected';

include('../app/_parts/_header.php');

?>

  <p><?= h($color); ?></p>
  <p><a href="index2.php">Go back</a></p>

<?php

include('../app/_parts/_footer.php');