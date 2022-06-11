<!-- 5. Спросите дату рождения пользователя. При следующем заходе на сайт напишите сколько 
дней осталось до его дня рождения. 
Если сегодня день рождения пользователя - поздравьте его -->

<form action="" method="POST">
    Введите дату рождения:<input type="text" name="date" placeholder="" >
    <input type="submit">
</form>

<?php

if (isset($_REQUEST['date'])) {
    $date = explode('.', $_REQUEST['date']);
    $now = time();
    $dr = mktime(23, 59, 59, $date[1], $date[0]) + 1;
    $today = date("d/m/Y");
    if ($dr > $now) {
        echo floor(($dr - $now) / 60 / 60 / 24) . ' дней';
    } elseif($dr < $now) {
        echo floor(($dr - $now + 60 * 60 * 24 * 365) / 60 / 60 / 24) . ' дней';
    } elseif($today) {
        echo "С днем рождения!!!";
    }
} 


?>