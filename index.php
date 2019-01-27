<?php
 
$animals = ['ネズミ', 'ウシ', 'トラ', 'ウサギ', 'タツ'];
 
$i = 2;
foreach($animals as $value){
 
  if (count($animals) == $i){
    echo $animals[$i-2];
  }
  $i++;
}
 
?>