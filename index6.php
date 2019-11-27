<?php
    // Определить, кратно ли заданное число трем; если нет, вывести остаток
    $a = rand(-20,20);
    echo "Проверяемое число: $a\n\n<br/><br/>";
    // Так как возможно всего 3 варианта остатка от деления числа на 3, выполнить задание можно при помощи switch
    switch (abs($a%3)):
        case 0:
            echo "Число $a кратно трём"; break;
        case 1:
            echo "Число $a не кратно трём. Остаток от деления: 1"; break;
        case 2:
            echo "Число $a не кратно трём. Остаток от деления: 2"; break;
    endswitch;
    // Но проще при помощи if
    /*
    if($a%3 == 0){
        echo "Число $a кратно трём";
    }else{
        echo "Число $a не кратно трём. Остаток от деления: " . $a%3 ;
    }
    */
?>