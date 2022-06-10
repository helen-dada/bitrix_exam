<?php

use Bitrix\Main\Type\DateTime;

$hour = new DateTime();
$hour = $hour->format('H');
?>

<div class="main-phone-block">
    <? if ($hour > 9 && $hour < 18) : ?>
        <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>
    <? else : ?>
        <a href="mailto:store@store.ru" class="phone">store@store.ru</a>
    <? endif; ?>
    <div class="shedule">время работы с 9-00 до 18-00</div>
</div>


