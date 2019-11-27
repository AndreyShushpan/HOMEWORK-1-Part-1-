<?php
// Определить количество дней в году, который случайно генерируется от 1900 до 2019
$a = rand(1900,2019);
echo "Сгенерировался $a год\n\n<br/><br/>";
if($a%4 == 0 && $a%100 != 0 || $a%400 == 0):     // Если год делится на 4, но не делится на 100, то он високосный. Если год делится на 100, но при этом не делится на 400, то год невисокосный.
    echo "$a год високосный. В нём 366 дней";
else:
    echo "$a год не високосный. В нём 365 дней";
endif;
?>