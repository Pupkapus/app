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
     echo "<h2>" . "1 zadanie" . "</h2>";
     $now =time();
     $NewYear = mktime(23, 59, 59, 12, 31) + 1;
     $day = floor(($NewYear - $now) / 60 / 60 / 24);
    echo 'До нового года : ' . $day;
    ?>
    <?php
        echo "<h2>" . "2 zadanie" . "</h2>" ;
        if (isset($_REQUEST['year'])) {
            $year = $_REQUEST['year'];
            if (($year % 4 == 0 and $year % 100 != 0) or $year % 400 == 0) {
                echo $year . ' год високосный!';
            } else {
                echo $year . ' год невисокосный!';
            }
        }
    ?>
    <form action="" method="get">
        <input type="text" name="year" ><br><br>
        <input type="submit" value="Високостный год?">
    </form>

    <?php
        echo "<h2>" . "3 zadanie" . "</h2>" ;
        echo "Формат даты(пример):01.12.1990". "</br>";

        if (isset($_REQUEST['date'])) {
            $date = explode('.', $_REQUEST['date']);
            $week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
            echo $week[date('w', mktime(0, 0, 0, (int) $date[0], (int) $date[1], (int) $date[2]))];
        }    
    ?>
    <form action="" method="get">
        <input type="text" name="date" value="01.12.1990"><br><br>
        <input type="submit">
    </form>

    <?php
        echo "<h2>" . "4 zadanie" . "</h2>" ;
        $week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
        $month = [1=>'янв', 'фев', 'мар', 'апр', 'май', 'июнь', 'июль', 'авг', 'сен', 'окт', 'ноя', 'дек'];
        $now = time();
        $date = explode('-', date('d-n-Y', $now));
        echo (int)$date[0].' '.$month[$date[1]]." ".(int)$date[2]." ".$week[date('w',$now)]; 
    ?>

    <?php
        echo "<h2>" . "5 zadanie" . "</h2>" ;
        if (isset($_POST["hp"])) {
            $date = strtotime($_POST["hp"]);//преобзаует текстовое представление даты
            $day = date("d", $date);
            $month = date("m", $date);
            $year = date("Y") + 1;
            echo "Дней до дня рождения: " . date_diff(date_create(), date_create("$day-$month-$year"))->days;
        }
    ?>

    <form action="" method="post">
        <input type="date" name="hp" value="01.12.1990" ><br><br>
        <input type="submit">
    </form>

    <?php
        echo "<h2>" . "6 zadanie" . "</h2>" ;
        $lastSn = 0;
        $now = time();
        for ($i = 28; $i >= 1; $i--) {
            if (date('w', mktime(0, 0, 0, 2, $i)) == 0) {
                $lastSn = mktime(23, 59, 59, 2, $i) + 1;
                break;
            }
        }
        if ($lastSn > $now) {
            echo floor(($lastSn - $now) / 60 / 60 / 24) . ' days';
        } else {
            echo floor(($lastSn - $now + 60 * 60 * 24 * 365) / 60 / 60 / 24) . ' days';
        }
    ?>
    <?php
        echo "<h2>" . "7 zadanie" . "</h2>" ;
        if (isset($_REQUEST['date'])) {
            $date = explode('.', $_REQUEST['date']);
            $dateStr = $date[1].$date[0];
            if ($dateStr >= '0321' and $dateStr <= '0419') {
                echo 'Овен';
            }
            if ($dateStr >= '0420' and $dateStr <= '0520') {
                echo 'Телец';
            }
            if ($dateStr >= '0521' and $dateStr <= '0620') {
                echo 'Близнецы';
            }
            if ($dateStr >= '0621' and $dateStr <= '0722') {
                echo 'Рак';
            }
            if ($dateStr >= '0723' and $dateStr <= '0822') {
                echo 'Лев';
            }
            if ($dateStr >= '0823' and $dateStr <= '0922') {
                echo 'Дева';
            }
            if ($dateStr >= '0923' and $dateStr <= '1022') {
                echo 'Весы';
            }
            if ($dateStr >= '1023' and $dateStr <= '1121') {
                echo 'Скорпион';
            }
            if ($dateStr >= '1122' and $dateStr <= '1221') {
                echo 'Стрелец';
            }
            if (($dateStr >= '1222' and $dateStr <= '1231') or ($dateStr >= '0101' and $dateStr <= '0119')) {
                echo 'Козерог';
            }
            if ($dateStr >= '0120' and $dateStr <= '0218') {
                echo 'Водолей';
            }
            if ($dateStr >= '0219' and $dateStr <= '0320') {
                echo 'Рыбы';
            }
        }
    ?>
    <form action="" method="get">
        <input type="text" name="date" placeholder="">
        <input type="submit">
    </form>

    <?php
    $newYear = date("12-31");
    $hallowen = date("10-31");
    $christmas = date("01-07");
    $Varmoroz = date("12-17");
    $holidays = [
        $newYear => "Новый год",
        $hallowen => "Хэллоуин",
        $christmas => "Рождество Христово",
        $Varmoroz => "Варварины Морозы"
    ];
  
    $today = date("m-d");
    foreach ($holidays as $key => $value) {
    if ($today == $key) {
      $output = "Поздравляем с праздником: $value!";
      break;
    }
    $output = "Сегодня нет никакого праздника";
    }
  echo $output;
  ?>
    
<h2>9 zadanie</h2>
<?php
  if (isset($_POST["date9"])) {
    include_once "horoscope.php";
    $date = explode('.', $_REQUEST['date9']);
    $dateStr = $date[1].$date[0];
    $zodiacSign=GetZodiacSign($dateStr);
    echo "Знак зодиака:" . $zodiacSign ."<br> Ваш гороскоп на сегодня: " . GetHoroscopeFor($zodiacSign);
  }
  ?>
  <form action="" method="post">
        <input type="text" name="date9" placeholder="">
        <input type="submit">
    </form>


 <?php
 echo "<h2>" . "10 zadanie" . "</h2>" ;
  if (isset($_POST["task10"])) {
    $text = $_POST["task10"];
    $alphabet = "АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯабвгдеёжзийклмнопрстуфхцчшщъыьэюя";
    echo "Количество слов: " . str_word_count($text, 0, $alphabet) . "<br>";
    echo "Количество символов: " . iconv_strlen($text) . "<br>";
    echo "Количество символов за вычетом пробелов: " . iconv_strlen($text)  - substr_count($text, " ") . "<br>";
  }
  ?>
<form action="" method="post">
<textarea name="task10"></textarea>
<input type="submit" value="sumbit">
</form>

<?php
 echo "<h2>" . "11 zadanie" . "</h2>" ;
if (!empty($_REQUEST['text11'])) {
    $str = $_REQUEST['text11'];
    $strLen = mb_strlen($str);
    $valuesCount = array_count_values(str_split($str));//str_split Преобразует строку в массив
    foreach ($valuesCount as $key => $item) {
        $x = 100 / $strLen * $item;
        echo '"'.$key.'" - "'.round($x, 2).'%"<br>';
    }
}
?>
<form action="" method="post">
    <textarea name="text11" >11 zadanie!</textarea>
    <input type="submit">
</form>

<?php
echo "<h2>" . "12 zadanie" . "</h2>" ;
$words = ['hello', 'friend', 'world', 'house', 'auto', 'russia', 'football', 'england', 'php'];
if (isset($_REQUEST['text12'])) {
    $char = str_split($_REQUEST['text12']);
    $wordsNew = [];
    $kol = count($char);
    foreach ($words as $word) {
        $k = true;
        for ($i = 0; $i < $kol; $i++) {
            if (!strpbrk($word, $char[$i])) {//strpbrk — Ищет в строке любой символ из заданного набора
                $k = false;
            }
        }
        if ($k) {
            $wordsNew[] = $word;
        }
    }
    foreach ($wordsNew as $word) {
        echo $word.'<br>';
    }
}
?>
<form action="" method="post">
    <input type="text" name="text12">
    <input type="submit">
</form>

<?php
echo "<h2>" . "13 zadanie" . "</h2>" ;
if (isset($_REQUEST['text13'])) {
    $abv = ['а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м',
        'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ы', 'э', 'ю', 'я'];
    $words = explode(' ', $_REQUEST['text13']);
    $res = [];
    foreach ($abv as $item) {
        foreach ($words as $word) {
            $word = mb_strtolower($word);
            if (mb_substr($word, 0, 1) == $item) {
                $res[$item][] = $word;
            }
        }
    }
    foreach ($res as $key => $item2) {
        echo 'Слова на букву '.$key.'<br>';
        foreach ($item2 as $subItem) {
            echo $subItem.'<br>';
        }
        echo '<br>';
    }
 
}
?>

<form action="" method="post">
    <textarea name="text13"></textarea>
    <input type="submit">
</form>


  
<?php
echo "<h2>" . "14 zadanie" . "</h2>" ;
  include_once "translit.php";

  if (isset($_POST["task14"])) {
    echo "Транслит: " . RusToLat($_POST["task14"]);
  }
?>
<form action="" method="post">
    <label>Строка на русском:</label>
    <input type="text" name="task14">
    <input type="submit" value="submit">
</form>

<?php
echo "<h2>" . "15 zadanie" . "</h2>" ;

    if (isset($_POST["text15"])) {
        if ($_POST["radio15"] === "To")
            {echo "Транслит: " . RusToLat($_POST["text15"]);}
        else if ($_POST["radio15"] === "From")
            {echo "Перевод: " . LatToRus($_POST["text15"]);}
    }
?>
<form action="" method="post">
    <input type="text" name="text15">
    <input type="submit"><br>
    <input type="radio" name="radio15" value="To" ><label>В транслит</label>
    <input type="radio" name="radio15" value="From"><label>Из транслита</label>
</form>

<style>
    .correct {
      background-color: limegreen;
    }

    .wrong {
      background-color: red;
    }
</style>
<h2>16 zadanie</h2>
  <p><b>Ответы "да" или "нет":</b></p>
  <form action="" method="post">
    <?php
    $quests = [
      "Меня зовут Никита?" => "да",
      "Мне 30 лет?" => "нет",
      "Я стрелец?" => "нет",
      "Я родился в 2002?" => "да",
      "У меня есть пони?" => "нет",
    ];

    $i = 0;
    foreach ($quests as $quest => $answer) {
      echo $quest . "<br>";
      if (isset($_POST["q$i"])) {
        echo "<p>Ваш ответ: " . $_POST["q$i"] . " - ";
        if ($_POST["q$i"] === $answer)
          echo '<span class = "correct">верно!';
        else
          echo '<span class = "wrong">неверно!';
        echo "</span></p>";
      } else
        echo '<input type="text" name="q' . $i . '"><br>';

      $i++;
    }
    ?>
    <input type="submit" value="submit">
  </form>

  <h2>17 zadanie</h2>
    <form action="" method="post">
    <?php
    $quests = [
        "Меня зовут Никита?" => "да",
        "Мне 30 лет?" => "нет",
        "Я стрелец?" => "нет",
        "Я родился в 2002?" => "да",
        "У меня есть пони?" => "нет",
    ];

    $i = 0;
    foreach ($quests as $quest => $answer) {
      echo $quest . "<br>";
      if (isset($_POST["radio17$i"])) {
        echo "<p>Ваш ответ: " . $_POST["radio17$i"] . " - ";
        if ($_POST["radio17$i"] === $answer)
          echo '<span class = "correct">верно!';
        else
          echo '<span class = "wrong">неверно!';
        echo "</span></p>";
      } else
        echo '
        <input type="radio" name="radio17' . $i . '" value="да">
        <label>да</label>
        <input type="radio" name="radio17' . $i . '" value="нет">
        <label>нет</label>
        <br>
        ';

      $i++;
    }
    ?>
    <input type="submit" value="submit">
  </form>

  <h2>18 zadanie</h2>
  <form action="" method="post">
    <?php
    $quests = [
      "У меня черные волосы?" => ["да", "нет"],
      "Илон Маск кореец?" => ["нет", "не знаю"],
      "У меня есть пони?" => ["нет"],
      "Моя фамилия Пак?" => ["да"],
      "Какой-то вопрос" => ["да", "не знаю"],
    ];

    $variants = [
      ["да", "нет", "не знаю"],
      ["да", "нет", "не знаю"],
      ["да", "нет", "не знаю"],
      ["да", "нет", "не знаю"],
      ["да", "нет", "не знаю"],
    ];

    $i = 0;
    foreach ($quests as $quest => $answer) {
      // Вопрос №
      echo $quest . "<br>";
      // Ваш ответ: 
      if (isset($_POST["submit"])) {
        echo "Ваш ответ: [";
        $userAnswer = [];
        for ($j = 0; $j < count($variants[$i]); $j++) {
          if (isset($_POST["radio18$i$j"])) {
            array_push($userAnswer, $_POST["radio18$i$j"]);
          }
        }
        // Ответ
        echo implode(", ", $userAnswer) . "] - ";
        // Верно/Неверно
        if (!array_diff($userAnswer, $answer) && !array_diff($answer, $userAnswer))
          echo '<span class = "correct">верно!';
        else
          echo '<span class = "wrong">неверно!';
        echo "</span></p>";
      } else {
        // Чекбоксы  
        for ($j = 0; $j < count($variants[$i]); $j++)
          echo '
            <input type="checkbox" name="radio18' . $i . $j . '" value="' . $variants[$i][$j] . '">
            <label>' . $variants[$i][$j] . '</label>
          ';
        echo "<br>";
      }
      $i++;
    }

    if (isset($_POST["reset"])) $_POST["submit"] = "";
    ?>
    <input type="submit" name="submit" value="submit">
    <input type="submit" name="reset" value="reset">
    </form>


    <h2>19 zadanie</h2>
    <p>Факториал</p>
    <?php
        if (isset($_REQUEST['num'])) {
        $num = $_REQUEST['num'];
        $arr = range(1, $num);
        $fak = array_product($arr);
        echo $fak;
        }
    ?>
    <form action="" method="post">
        <input type="text" name="num" placeholder=""><br><br>
        <input type="submit">
  </form>

  <h2>20 zadanie</h2>
<?php
    if (isset($_REQUEST['a']) and isset($_REQUEST['b']) and $_REQUEST['c']) {
        $a = $_REQUEST['a'];
        $b = $_REQUEST['b'];
        $c = $_REQUEST['c'];
        $d = $b * $b - 4 * $a * $c;
        $x1 = round((-$b + sqrt($d)) / (2 * $a), 2);
        $x2 = round((-$b - sqrt($d)) / (2 * $a), 2);
        echo 'x1 = '.$x1.', x2 = '.$x2;
    }
?>
 
<form action="" method="post">
    <input type="text" name="a" placeholder=""><br><br>
    <input type="text" name="b" placeholder=""><br><br>
    <input type="text" name="c" placeholder=""><br><br>
    <input type="submit">
</form>

<h2>21 zadanie</h2>
<?php
if (isset($_REQUEST['a1']) and isset($_REQUEST['b1']) and $_REQUEST['c1']) {
    $arr[] = $_REQUEST['a1'] * $_REQUEST['a1'];
    $arr[] = $_REQUEST['b1'] * $_REQUEST['b1'];
    $arr[] = $_REQUEST['c1'] * $_REQUEST['c1'];
    sort($arr);
    if ($arr[2] == $arr[1] + $arr[0]) {
        echo 'Тройка Пифагора';
    } else {
        echo 'не тройка Пифагора';
    }
}
?>
 
<form action="" method="post">
    <input type="text" name="a1" placeholder=""><br><br>
    <input type="text" name="b1" placeholder=""><br><br>
    <input type="text" name="c1" placeholder=""><br><br>
    <input type="submit">
</form>


<h2>22 zadanie</h2>
<?php
if (isset($_REQUEST['numb'])) {
    $num = $_REQUEST['numb'];
    $del = [];
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $del[] = $i;
        }
    }
    $str = implode(', ', $del);
    echo $str;
}
?>
<form action="" method="post">
    <input type="text" name="numb" placeholder=""><br><br>
    <input type="submit">
</form>

<h2>23 zadanie</h2>
<?php
function mnozhitel($num, $x)
{
    return $num % $x == 0;
}
 
function prostoy($x)
{
    $kol = 0;
    for ($i = 1; $i < $x; $i++) {
        if ($x % $i == 0) {
            $kol++;
            if ($kol > 1) {
                break;
            }
        }
    }
    if ($kol == 1) {
        return true;
    } else {
        return false;
    }
}
 
function razdelenie($num)
{
    for ($i = 2; $i <= $num; $i++) {
        if (mnozhitel($num, $i)) {
            if (prostoy($i)) {
                global $arr;
                razdelenie($num / $i);
                $arr[] = $i;
                break;
            }
        }
    }
}
 
if (isset($_REQUEST['num2'])) {
    $num = $_REQUEST['num2'];
    $arr = [];
    if (prostoy($num)) {
        echo 'Вы ввели простое число';
    } else {
        razdelenie($num);
    }
    echo implode(', ', array_reverse($arr));
}
?>
<form action="" method="post">
    <input type="text" name="num2" placeholder=""><br><br>
    <input type="submit">
</form>


<h2>24 zadanie</h2>
<?php
function deliteli($num)
{
    $del = [];
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $del[] = $i;
        }
    }
    return $del;
}
if (isset($_REQUEST['a2']) and isset($_REQUEST['b2'])) {
    $a = $_REQUEST['a2'];
    $b = $_REQUEST['b2'];
    $delA = deliteli($a);
    $delB = deliteli($b);
    $str = implode(', ', array_intersect($delA, $delB));
    echo $str;
}
?>
<form action="" method="post">
    <input type="text" name="a2" placeholder=""><br><br>
    <input type="text" name="b2" placeholder=""><br><br>
    <input type="submit">
</form>


<h2>25 zadanie</h2>
<?php
if (isset($_REQUEST['a3']) and isset($_REQUEST['b3'])) {
    $a = $_REQUEST['a3'];
    $b = $_REQUEST['b3'];
    $delA = deliteli($a);
    $delB = deliteli($b);
    $del = array_intersect($delA, $delB);
    echo max($del);
}
?>
<form action="" method="post">
    <input type="text" name="a3" placeholder=""><br><br>
    <input type="text" name="b3" placeholder=""><br><br>
    <input type="submit">
</form>


<h2>26 zadanie</h2>
<?php
if (isset($_REQUEST['a']) and isset($_REQUEST['b'])) {
    $a = $_REQUEST['a'];
    $b = $_REQUEST['b'];
    $max = 0;
    if ($a > $b) {
        $max = $a;
    } else {
        $max = $b;
    }
    $flag = true;
    while ($flag) {
        $max++;
        if ($max % $a == 0 and $max % $b == 0) {
            $flag = false;
            echo $max;
        }
    }
}
?>
<form action="" method="post">
    <input type="text" name="a" placeholder=""><br><br>
    <input type="text" name="b" placeholder=""><br><br>
    <input type="submit">
</form>

<h2>27 zadanie</h2>

<?php
$month = [1 => 'январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];
$week = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];
if (isset($_REQUEST["day"]) and isset($_REQUEST["month"]) and isset($_REQUEST["year"])) {
    $day = $_REQUEST["day"];
    $mon = array_search($_REQUEST["month"], $month);
    $year = $_REQUEST["year"];
    $dayOfWeek = $week[date('w', mktime(0, 0, 0, $mon, $day, $year))];
    echo $dayOfWeek;
}
?>
<form action="" method="post">
    <select name="day">
        <?php for ($i = 1; $i <= 31; $i++): ?>
            <option><?=$i;?></option>
        <?php endfor;?>
    </select>
    <select name="month">
        <?php foreach ($month as $item): ?>
            <option><?=$item;?></option>
        <?php endforeach;?>
    </select>
    <select name="year">
        <?php for ($i = 1990; $i <= 2025; $i++): ?>
            <option><?=$i;?></option>
        <?php endfor;?>
    </select>
    <input type="submit">
</form>

</body>
</html>