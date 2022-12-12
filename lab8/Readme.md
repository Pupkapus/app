<p align = "center">МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ
РОССИЙСКОЙ ФЕДЕРАЦИИ
ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ
ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ
«САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</p>
<br>
<p align = "center">Институт естественных наук и техносферной безопасности</p>
<p align = "center">Кафедра информатики</p>
<p align = "center">Пак Никита Витальевич</p>
<br>
<p align = "center">Лабораторная работа №8</p>
<p align = "center">01.03.02 Прикладная математика и информатика</p>
<br>
<p align = "right" >Научный руководитель</p>
<p align = "right" >Соболев Евгений Игоревич</p>
<p align = "center" >Южно-Сахалинск</p>
<p align = "center" >2022 г.</p>
<p align = "center" ><b>ВВЕДЕНИЕ</b></p>
<p>PHP — C-подобный скриптовый язык общего назначения, интенсивно применяемый для разработки веб-приложений. В настоящее время поддерживается подавляющим большинством хостинг-провайдеров и является одним из лидеров среди языков, применяющихся для создания динамических веб-сайтов.</p>
<p align = "center" >РЕШЕНИЕ ЗАДАЧ</p>
  
  ```php
 
 <?php
    //Автор: Пак Никита
    /*Дата выполнения*/
    echo "<h2>" . "1 zadanie" . "</h2>";
    echo "<p>" . "Hello!". "</p>"
    ?>

    <?php
    $tvChannel;
    $addresProizv;
    $colorAuto;
    $tempWater;
    $modelPhone;
    ?>

    <?php
    echo"<h2>" . "3 zadanie" . "</h2>";
    $a=3;
    $b=5;
    $c=8;
    echo "Первое число=" . $a . ", второе число=" . $b . ", третье число=" . $c . "</br>";
    $sum = $a + $b + $c;
    echo "Сумма этих чисел равна:" . $sum . "</br>";
    $result = 2+6+2/5-1;
    echo "2+6+2/5-1=" . $result;
    ?>

    <?php
    echo"<h2>" . "4 zadanie" . "</h2>";
    $a=1;
    $b=2;
    echo "a=" . $a . ", b=" . $b . "</br>";
    $c=$a;
    $d=$b;
    echo "c=" . $c . ", d=" . $d . "</br>";
    $a=3;
    $b=4;
    echo "a=" . $a . ", b=" . $b . ", c=" . $c . ", d=" . $d . "</br>";
    ?>

    <?php
        echo"<h2>" . "5 zadanie" . "</h2>";
        define("a1", 41);
        define("b1", 33);
        $sum = constant("a1") + constant("b1");
        echo "Сумма констант=" . $sum;
    ?>

    <?php
    echo"<h2>" . "6 zadanie" . "</h2>";
    $a = 152; 
    var_dump($a); echo "</br>";
    $b='152';
    var_dump($b); echo "</br>";
    $c = 'London';
    var_dump($c); echo "</br>";
    $d = array(152); 
    var_dump($d); echo "</br>";
    $e = 15.2;
    var_dump($e);echo "</br>";
    $f = false;
    var_dump($f);echo "</br>";
    $g = true; 
    var_dump($g);echo "</br>";
    
        echo"<h2>" . "7 zadanie" . "</h2>";
        $a = "съела";
        $b = "корова!";
        echo "<p>" . "Первое слово " . $a ." ". $b . "</br>";
    
    echo"<h2>" . "8 zadanie" . "</h2>";
    $a = "Доброе утро";
    $b = "дамы";
    $c = "и господа";
    echo "<p>" . $a . ", " . $b . " " . $c; 

    echo"<h2>" . "9 zadanie" . "</h2>";
    $arr1 = [1,2,3,4,5];
    $arr2 = [6,7,8,9,10];
    $arr1["element"] = 11;
    unset($arr2[0]);
    echo "вывод элемента под индексом 2 из первого и второго массива: " . $arr1[2] . " " . $arr2[2] . "</br>";
    var_dump($arr1);echo "</br>";
    var_dump($arr2);echo "</br>";
    $cou1 = count($arr1);
    $cou2 = count($arr2);
    echo "вывод кол-во элементов в первом и во втором массиве: " .$cou1 .", " .$cou2 . "</br>";
    
    echo"<h2>" . "10 zadanie" . "</h2>";
    define("N", 5);
    for ($i=0; $i < N; $i++)
        {
            $per = random_int(-21, 35);
            echo $per . "</br>";
        }

    echo"<h2>" . "11 zadanie" . "</h2>";
    for ($i=0; $i < N; $i++)
        {
            $per += random_int(-21, 35);
            
        }
    echo $per . "</br>";

    echo"<h2>" . "12 zadanie" . "</h2>";
    $per = [];
    for ($i=0; $i < N; $i++)
        {
            $per[$i] = random_int(-21, 35);
            echo $per[$i]."</br>";
            if ($i>0)
            {
                if ($per[$i]>$per[$i-1])
                {
                    echo "больше предыдущего" . "</br>";
                }
                else if ($per[$i]>$per[$i-1])
                {
                    echo "равны" . "</br>";
                }
                else{echo "меньше предыдущего" . "</br>";}
            }
        }
    echo"<h2>" . "13 zadanie" . "</h2>";

    function Fibb($n)
    {
        if($n<=1)
        {
            return 0;
        }
        if ($n==2)
        {
            return 1;
        }
        return Fibb($n-1) + Fibb($n-2);
    }

    echo N . " число Фибоначчи = " . Fibb(N);


    echo"<h2>" . "14 zadanie" . "</h2>";
    
    function obr($chislo)
    {
        $temp = 0;
        while($chislo){
            $temp = ($chislo % 10);
            $chislo = ($chislo-$chislo % 10) / 10;
            echo $temp;
        }
    }
    echo obr(12345);

    echo"<h2>" . "15 zadanie" . "</h2>";

    function nechet($chislo)
    {
        $temp = 0;
        $status = false;
        while($chislo){
            $temp = ($chislo % 10);
            $chislo = ($chislo-$chislo % 10) / 10;
            if ($temp%2==1)
            {
                $status=true;
                echo $temp;
            }
        }
        if ($status==false)
        {
            echo "Нечетных цифр не обнаружено!";
        }
    }
    echo nechet(12345);

    echo"<h2>" . "16 zadanie" . "</h2>";

    function mass()
    {
        $mass = [];
        for ($i=0; $i<7;$i++)
        {
            $mass[$i] = random_int(-21, 35);
        }
        for ($i=0; $i<7;$i++)
        {
            echo $mass[$i] . ", ";
        }
    }

    echo mass();

    echo"<h2>" . "17 zadanie" . "</h2>";
    $m = 5;
    $n = 5;
    $arr3 = [];
    for ($i=0; $i<$n;$i++)
    {
        for ($j=0; $j<$m;$j++)
        {
            $arr3[$i][$j]=random_int(-21, 35);
        }
    }
    echo "вывод двумерного массива" . "</br>";
    for ($i=0; $i<$n;$i++)
    {
        for ($j=0; $j<$m;$j++)
        {
            echo $arr3[$i][$j] . ", ";
        }
        echo "</br>";
    }

    echo"<h2>" . "18 zadanie" . "</h2>";

    $N=20;
    $arr4 =[];
    for($i=1;$i<=$N;$i++)
    {
        $arr4[$i-1]=$i; 
    }

    for ($i = 0, $j = 0, $k = 1; $i < $N; $i++) {
        echo $arr4[$i] . " ";
        if (++$j >= $k) {
            $j = 0;
            $k++;
            echo "</br>";
        }
    }

    echo "</br>". "Вариант без массива" . "</br>";
    for($i=1, $j = 0, $k = 1; $i <= $N; $i++)
    {
        echo $i . " ";
        if (++$j >= $k) {
            $j = 0;
            $k++;
            echo "</br>";
        }
    }

    echo"<h2>" . "19 zadanie" . "</h2>";
    $N=10;
    $arr5 =[];
    $arr5[0]=random_int(-20,20); 
    echo $arr5[0] . ", ";
    $max = $arr5[0];
    for($i=1;$i < $N;$i++)
    {
        $arr5[$i]=random_int(-100,100); 
        echo $arr5[$i] . ", ";
        if ($max<$arr5[$i])
        {
            $max = $arr5[$i];
        }
    }
    echo "</br>" . "Максимальное число=" . $max;

    echo"<h2>" . "20 zadanie" . "</h2>";
    $N=20;
    $arr5 =[];
    $arr5[0]=random_int(-20,20); 
    echo $arr5[0] . ", ";
    $min = $arr5[0];
    for($i=1;$i < $N;$i++)
    {
        $arr5[$i]=random_int(-100,100); 
        echo $arr5[$i] . ", ";
        if ($min>$arr5[$i])
        {
            $min = $arr5[$i];
        }
    }
    echo "</br>" . "Минимальное число=" . $min;

    echo"<h2>" . "21 zadanie" . "</h2>";
    $arr1 = [];
    $arr2 = [];
    for($i = 0; $i < $N; $i++)
    {
        $arr1[$i]=$arr2[$i]=random_int(-100,100);
    }
    for ($i=2, $j=1;$i < $N; $i+=3, $j+=2)
    {
        if ($arr1[$i]>$arr2[$j])
        {
            echo "arr1[i]=" . $arr1[$i] . " больше чем arr2[j]=" . $arr2[$j] . "</br>";
        }
        else if ($arr2[$j]>$arr1[$i]){
            echo "arr2[j]=" . $arr2[$j] . " больше чем arr1[i]=" . $arr1[$i] . "</br>";
        }
        else echo"arr2[j]=arr1[i]=". $arr2[$j] . "</br>";
    }


    echo"<h2>" . "22 zadanie" . "</h2>";
    function z22($arr)
    {
        foreach($arr as $num)
        {
            switch($num){
                case 5:
                    echo "пять". "</br>";
                    break;
                case 6:
                    echo "шесть". "</br>";
                    break;
                case 7:
                    echo "семь". "</br>";
                    break;
                default:
                    echo "какое-то другое число" . "</br>";
                    break;
            }
        }
    }
    
    $N=10;
    $arr2 = [];
    for($i = 0; $i < $N; $i++)
    {
        $arr2[$i]=random_int(5,12);
        echo $arr2[$i] . ", ";
    }
    echo "</br>";
    z22($arr2);

    echo"<h2>" . "23 zadanie" . "</h2>";
    $a = [];
    for ($i = 0; $i < 10; $i++) {
	    $a[$i] = random_int(1, 20);
    }
    $b = [12, 5, 17, 6, 4];

    for ($i = 0; $i < 10; $i++) {
	    echo $a[$i] . ", ";
    }
    echo "</br>";
    for ($i = 0; $i < 5; $i++) {
	    echo $b[$i] . ", ";
    }
    echo "</br>";
    //	1)без in_array
    $counter = [];
    for ($i = 0; $i < count($b); $i++) {
	    $counter[$b[$i]] = 1;
    }
    for ($i = 0; $i < 10; $i++) {
	    if (empty($counter[$a[$i]])) echo $a[$i], " ";
    }
    echo "</br>";
    //	2)in_array
    for ($i = 0; $i < 10; $i++) {
	    if (!in_array($a[$i], $b)) echo $a[$i], " ";
    }
    ?>
 ```

<p align = "center" >ВЫВОД</p>
<p>Подводя итог всему сказанному, могу сделать вывод, что, поработав на php, я вспомнил многое и применил это на практике. Все задачи были выполнены.</p>