<?php
//Enter a string and reverse it//
$str = $_POST['usersString'];
$len = strlen($str);
for($i=($len-1); $i>=0; $i--){
    echo $str[$i];}
?>