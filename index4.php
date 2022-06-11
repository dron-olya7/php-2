<!--4. Удалите куку с именем test. -->

<?php

setcookie('test', '123', time(10));
echo $_COOKIE['test'];

