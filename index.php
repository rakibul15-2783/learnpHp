<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My First php page</h1>
<?php
#not a case sensative for keyword
echo "rakibuul islam <br>" ;
echo "rakib<br>";
EcHo "true!<br>";
$color = 'red';
//case sensative for varaiable
echo "My car is $color. <br>";
echo "rakib<br>";
$x="5<br>";
$y=10.5;
echo  "$x $y <br>";
echo "$x $y";
echo "rakib<br>";
echo $x+$y;
echo "rakib";
echo "<br>";
function myTest() {
    $x = 11; // local scope
    echo "<p>Variable x inside function is: $x</p>";
  }
  myTest();
var_dump($y);
echo "<br>";
echo strlen($color);
echo "<br>";
echo str_word_count("My self Rakibul Islam $color  ");
echo "<br>";
eCho strrev("You are a lier");
echo "<br>";
EcHo strpos("Hello world", "o");

echo "<br>";
ecHO str_replace("rakib","robin","hello rakib");
echo "<br>";
define("rakib",["Age: 22 years","Address:Parbatipur"]);
echo rakib[0];
echo "<br>";

//create a function

define("welcome","Welcome to php course");
function welcome(){
    echo welcome;
}
welcome();

echo "<br>";

//condition

$t = date("h");
if($t>20)
{
    echo "Have a good day";
}
else
{
    echo "Have a bad day!";
}

                                //loops

//while loop

$s = 10;
while ($s<=20) {
    echo "The number is less than $s <br>";
    $s+=1;
}

//for loop

for($b = 0;$b<10;$b++){
    echo "The number is : $b<br>";
}

//foreach loop

$colors = array("red","green","yellow");
foreach($colors as $value){
    echo "$value <br>";
}
echo "$colors[0]<br>";

//function

function familyName($fname){
    echO "$fname Islam <br>";
}

familyName("Rakibul");
familyName("jibon");
echo "<br>";

                         //Array

//indexed array
$gari=array("volvo","MBW","Toyota");
$arrlength = count($gari);
for($c=0;$c<$arrlength;$c++){
    echo $gari[$c];
    echo "<br>";
}

//associative array

$age = array("peter"=>"34", "Ben"=>"35");
echo "peter is ".  $age["peter"] .  " years old";



//Multidimentional array
echo "<br>";
$bus = array(
   array("Volvo",22,13),
   array("MNW",21,19),
   array("Saab",23,11)
);

echo $bus[0][0]. ": In Stock : ".$bus[0][1]. ", Sold : ".$bus[0][2]."<br>";
echo $bus[1][0]. ": In Stock :".$bus[1][1]. ", Sold : ".$bus[1][2]."<br>";
echo $bus[2][0]. ": In Stock : ".$bus[2][1]. ", Sold : ".$bus[2][2]."<br>";
echo "<br>";

for($row=0;$row<3;$row++){
    echo "<p> <b> Row Number $row </b></p>";
    echo "<ul>";
    for($col=0;$col<3;$col++){
        echo "<li>".$bus[$row][$col]. "</li>";
    }
    echo "</ul>";
}

echo "<br>";

$family = array(
    array("Redoy",26,"Graduate"),
    array("Rakib",23,"Undergraduate"),
    array("Radowan",19,"Secondary")
);

for($row=0;$row<3;$row++){
    echo "<ul>";
    for($col=0;$col<3;$col++){
        echo "<li>".$family[$row][$col]."</li>";
    }
    echo "</ul>";
    
}
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['PHP_SELF'];

?>
?>
</body>
</html>
