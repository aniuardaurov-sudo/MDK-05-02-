<h1>Практическая работа 4</h1>
<form action="">
    <p>Ведите число:</p>
    <input name = "number">
    <input type="Submit" value="Отправить">
</form>

 <?php
 if (isset($_GET['number'])){
    $a = $_GET['number'];
 switch ($a) {
case 0:
     echo 'zero'; 
break;
case 1: 
     echo 'one';
break;
case 2: 
      echo 'two';
break;
case 3: 
    echo 'three';
break;
case 4: 
    echo 'four'; 
break;
case 5:
    echo 'five'; 
break;
case 6: 
     echo 'six';
break;
case 7:
     echo 'seven'; 
break;
case 8:
      echo 'eight';
break;
case 9: 
     echo 'nine'; 
break;
    default:
     echo 'Ошибка ввода';
 }}
?>

<form action="">
    <p>Введите номер месяца (от 1 до 12):</p>
    <input name="month">
    <input type="Submit" value="Отправить">
</form>

<?php
if (isset($_GET['month'])) {
    $a = $_GET['month'];
    switch ($a) {
        case 1:
echo '1 января — Новый год, 7 января — Рождество';
      break;
        case 2:
echo '23 февраля — День защитника Отечества,2 Феврфля победа под сталинградом ';
      break;
        case 3:
echo '8 марта — Международный женский день,27 Март день театра';
      break;
        case 4:
echo '1 апреля — День смеха ,12 апрель день космонавтики';
      break;
        case 5:
echo '1 мая — Праздник Весны и Труда, 9 мая — День Победы';
      break;
        case 6:
echo '12 июня — День России , 1 Июня день защиты детей ';
      break;
        case 7:
echo '8 Июля - День семьи , 25 Июля день ВМФ РФ';
      break;
        case 8:
echo '22 августа — День Государственного флага РФ ,27 августа — День российского кино';
      break;
        case 9:
echo '1 сентября — День знаний , 27 сентября — Всемирный день туризма ';
      break;
        case 10:
echo '5 октября — День учителя , 31 октября — Хэллоуин';
     break;
        case 11:
echo '4 ноября — День народного единства , Последнее воскресенье ноября — День матери';
     break;
        case 12:
echo '31 декабря — Новый год , 9 декабря — День Героев Отечества';
     break;
        default:
echo 'Ошибка ввода (введите число от 1 до 12)';
    }
}
?>

<form action="">
    <p>Введите номер месяца (от 1 до 12):</p>
    <input name="month">
    <input type="Submit" value="Отправить">
</form>

<?php
if (isset($_GET['month'])) {
    $a = $_GET['month'];
    switch ($a) {
        case 0:
     echo 'zero'; 
break;
case 1: 
     echo '1';
break;
case 2: 
      echo '4';
break;
case 3: 
    echo '9';
break;
case 4: 
    echo '6'; 
break;
case 5:
    echo '5'; 
break;
case 6: 
     echo '6';
break;
case 7:
     echo '9'; 
break;
case 8:
      echo '4';
break;
case 9: 
     echo '1'; 
break;
    }}
    ?>