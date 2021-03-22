<?php

setcookie('color', '');

header('Location: http://localhost:8080/index2.php');
// header() にはいくつかルールがあって、まず setcookie() 同様、この命令の前に何らかの出力をしてはいけません。Location ですが、ちゃんと先頭の L を大文字にしてあげてください。それから : のあとの半角空白は必ず必要になります。リダイレクト先は http から書いてあげましょう。