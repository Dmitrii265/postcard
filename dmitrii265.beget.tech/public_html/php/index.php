<?php
  ini_set('error_reporting', E_ALL);
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);// ИСПРАВЛЯЕТ ОШИБКИ //
?>


<meta charset="UTF-8">
<h1>Мой первый сайт на PHP</h1>
<?php
$name = "Вася";
echo "<b>Привет ".$name."!</b>";// второй вариант привет вася
echo "<br>";
echo "<b>Привет $name!</b>";// третий вариант привет вася

// <meta charset="UTF-8">- сокращенно - без !Tab,  (выше) убирает кракозябры переводит в текст //
//echo "Привет мир !";

//echo "<b>Привет мир !</b>";//жирный текст 
//echo 555 -выведит число
?>
<div style="border:4px solid red; margin-top: 10px">
  <?php
    $bananas = 5;
    $apples =10;
    $fruitsTotal = $bananas +  $apples;
    echo "$name съел $fruitsTotal фруктов";// сложение, можно применить другие функции + - / *  %
    echo  "<br>";
    
    define("PI", 3.14);//
    $radius = 10;
    $square = PI * ($radius**2);
    echo $square;
    echo  "<br>";
    
    $stringNumber = "500";//
    $number = (integer)$stringNumber;
    echo $number + $number;
    echo  "<br>";
    
    $number = 3.49;// округляет число
    echo ceil($number)."<br>";
    echo round($number)."<br>";
    echo floor($number)."<br>";
    echo rand(10, 100)."<br>";// меняется от и до
    
    $string = "Привет, ";
    $string = "Вася ! ";
    echo $string."<br>";
  ?>
</div>
<div style="border:4px solid green; margin-top: 10px">
  <?php
    $a = 5;
    if ($a == 7) {
      echo "Равно";
    } else {
      echo "Не равно";  
    }// условие равно не равно
  ?>

</div>
</div>
<div style="border:4px solid pink; margin-top: 10px">
  <?php
    $a = 4;
    if (($a > 0 and $a <=7) or $a == 15) {// или($a > 0 and $a <=7) условие или or $a == 15) условие будет выполнятся
      echo "Равно";
    } else {
      echo "Не равно";  
    }
    echo  "<br>";
    
    $food = "apple";
    if($food == "apple") {
      echo $food. " - фрукт";
    } elseif ($food == "cucumber") {
      echo $food. " - овощ";
    } else {
      echo $food. " - не съедобно";
    }                                          //==========первый вариант
     echo  "<br>";
    /*$food = "tomato";
    switch ($food) {
      case "apple":
        echo $food." - фрукт";
        break;
      case "peach":
        echo $food." - фрукт";
        break;  
      case "orange":
        echo $food." - фрукт";
        break;
      case "cucumber":
        echo $food." - овощ";
        break;
      case "carrot":
        echo $food." - овощ";
        break;
      case "tomato":
        echo $food." - овощ";
        break;
      default:
       echo $food." - не съедобен"; 
    }*/                             //=========второй  вариант
    
    
    $food = "tomato";
    switch ($food) {
      case "apple":
      case "peach":
      case "orange":
        echo $food." - фрукт";
        break;
      case "cucumber":
      case "carrot":
      case "tomato":
        echo $food." - овощ";
        break;
      default:
       echo $food." - не съедобен";    
    } //  сокращенный вариант второго  
  ?>
</div>  
  
 <h2> ЦИКЛЫ </h2> 
  
 <div style="border:2px solid black; margin-top: 10px">
  <?php 
   for($i =0; $i <= 10; $i++) {
     echo $i." | ";// цифры в стоку разделенные
   }
    echo  "<br>";
    $count = 0;
    while ($count < 5) {
      echo "<p>Счетчик: $count <p>";
      $count++;
    }
    echo  "<br>";
    do {
      echo "<p><b>Do cчетчик: $count</b></p>";
    } while ($count > 10);// счетчики
    
  ?>
  
</div>
<hr>



