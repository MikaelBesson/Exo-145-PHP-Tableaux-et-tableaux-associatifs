<?php

echo "<br>Premiere ligne<br>";

$fruits = array("Apple", "Banana", "Orange");
echo count($fruits)."<br><br>";


echo "<br>deuxieme ligne<br>";


$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

echo "<br>Ben is ".$age["Ben"]." years old.<br><br>";

foreach($age as $key => $value) {
    echo "<br>Key=" .$key. ", Value=" .$value."<br>" ;
}

echo "<br>troisieme ligne<br><br>";

$colors = array("red", "green", "blue", "yellow");
sort($colors);
foreach ($colors as $item){
    echo "$item.<br>";
}


echo "<br>quatrieme ligne<br><br>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
foreach ($age as $key =>$val){
    echo "$key = $val <br>";
}





