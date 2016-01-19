<?php

$data = $_POST['usersString'];

foreach (count_chars($data, 1) as $i => $val) {
   echo chr($i) . " occurred a number of $val times in the string." . "<br>";
}
?>