<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $var ="hello";
    echo "<h2>" . "1 zadanie" . "</h2>" . " ". $var . "</br>";
    echo $var[0] . ", " . $var[1] . ", " . $var[4] . "</br>" ;
    ?>
    <?php
    echo "<h2>" . "2 zadanie" . "</h2>" . "</br>";
    echo 60*60 . "</br>";
    ?>
    <?php
    echo "<h2>" . "3 zadanie" . "</h2>" ."</br>";
    $var = 1;
    $var +=12;
    $var -=14;
    $var *=5;
    $var /=7;
    ++$var;
    --$var;
    echo $var . "</br>"; 
    ?>
    <?php
    echo "<h2>" . "4 zadanie" . "</h2>" . "</br>";
    $a = 3;
    print "a=" . $a  . "</br>";
    ?>
    <?php
    echo "<h2>" . "5 zadanie" . "</h2>" . "</br>";
    $a = 10;
    $b = 2;
    echo "a= " . $a . "</br>";
    echo "b= " . $b . "</br>";
    echo "a+b= " . $otvet = $a + $b . "</br>" ; 
    echo "a-b= " . $otvet = $a - $b . "</br>";
    echo "a*b= " . $otvet = $a * $b . "</br>";
    echo "a/b= " . $otvet = $a / $b . "</br>";   
    ?>
     <?php
    echo "<h2>" . "6 zadanie" . "</h2>" . "</br>";
    $c = 15;
    $d = 2;
    $result = $c + $d;
    print "result = ". $result;
    ?>
    <?php
    echo "<h2>" . "7 zadanie" . "</h2>" . "</br>";
    $a = 10;
    $b = 2;
    $c = 5;
    $result = $a + $b + $c;
    print "result = ". $result;
    ?>
    <?php
    echo "<h2>" . "8 zadanie" . "</h2>" . "</br>";
    $a = 17;
    $b = 10;
    $c = $a - $b;
    $d = 7;
    $result = $c + $d;
    print "result = ". $result;
    ?>
    <?php
    echo "<h2>" . "9 zadanie" . "</h2>" . "</br>";
    $text = 'Привет мир!';
    print $text;
    ?>
    <?php
    echo "<h2>" . "10 zadanie" . "</h2>" . "</br>";
    $text1 = "Привет,";
    $text2 ="Мир!";
    $text ="";
    $text = $text1 . " ". $text2;
    print $text;
    ?>
    <?php
    echo "<h2>" . "11 zadanie" . "</h2>" . "</br>";
    $name = "Никита";
    print "Привет, " . $name . "!";
    ?>
    <?php
    echo "<h2>" . "12 zadanie" . "</h2>" . "</br>";
    $age = 19;
    print "Мне " . $age . " лет";
    ?>
    <?php
    $var ="abcde";
    echo "<h2>" . "13 zadanie" . "</h2>" . " ". $var . "</br>";
    echo $var[0] . ", " . $var[2] . ", " . $var[4] . "</br>" ;
    ?>
    <?php
    $var ="abcde";
    echo "<h2>" . "14 zadanie" . "</h2>" . " ". $var . "</br>";
    $var[0] = "!";
    echo $var . "</br>" ;
    ?>
    <?php
    $num ="12345";
    echo "<h2>" . "15 zadanie" . "</h2>" . " ". $num . "</br>";
    $var = $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
    echo  "summa= " . $var . "</br>" ;
    ?>
    <?php
    echo "<h2>" . "16 zadanie" . "</h2>" . "</br>";
    echo "В часе: " . 60*60 . " секунд" . "</br>";
    echo "В сутках: " . 60*60*24 . " секунд" . "</br>";
    echo "В месяце: " . 60*60*24*30 . " секунд" . "</br>";
    ?>
    <?php
    echo "<h2>" . "17 zadanie" . "</h2>" . "</br>";
    $hour = "17";
    $minutes = "55";
    $seconds = "01";
    echo $hour . ":" . $minutes . ":" . $seconds . "</br>";
    ?>
    <?php
    $num = 7;
    echo "<h2>" . "18 zadanie" . "</h2>" . " ". $num . "</br>";
    $num *=$num;
    echo  "квадрат числа равен " . $num . "</br>";
    ?>
    <?php
    echo "<h2>" . "19 zadanie" . "</h2>" . "</br>";
    $var = 47;
    $var +=7;
    $var -=18;
    $var *=10;
    $var /=20;
    echo $var . "</br>"; 
    ?>
    <?php
    echo "<h2>" . "20 zadanie" . "</h2>" . "</br>";
    $text = 'Я';
    $text .=' хочу';
    $text .=' знать';
    $text .=' PHP!';
    echo $text;
    ?>
    <?php
    echo "<h2>" . "21 zadanie" . "</h2>" . "</br>";
    $var = 10;
    ++$var;
    ++$var;
    --$var;
    echo $var;
    ?>
    <?php
    echo "<h2>" . "22 zadanie" . "</h2>" . "</br>";
    $var = 10;
    $var +=7;
    ++$var;
    --$var;
    $var +=12;
    $var *=7;
    $var -=15;
    echo $var;
    ?>
</body>
</html>