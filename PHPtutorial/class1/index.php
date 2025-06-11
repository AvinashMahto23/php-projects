<?php 
echo "<h1>hello World</h1>";
$name="john";
$age="25";
echo "<h1>Name: $name, Age:$age</h1>";

$age=15;
if($age>18){
  echo "you can vote <br>";
}
else{
  echo "you are under 18 and you can't vote";
}







$percent = 45;
if ($percent > 59) {
    echo "You got first Division";
} else if ($percent > 45) {
    echo "You got second Division";
} else if($percent>35) {
    echo "You got third Division <br> <br><br>";
}
else {
    echo "You are fail";}
 
// for($i=1;$i<25;$i++)
// {
//   echo "<h1>Table of $i</h1> <br>";
//   for($j=1; $j<=10;$j++){
//     echo $i*$j ."<br>";
//   }
// }

$fruits=["mango","apple","Banana","orange"];

foreach($fruits as $fruit){
  echo "$fruit <br>";
}

function greet($name){
  echo "Hello $name";
}
greet('Avi');
?>