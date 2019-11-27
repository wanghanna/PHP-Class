<?php
for($i=0; $i<=100; $i+=5){
echo $i."<br>";
}
?>
<hr>
<?php
// $a = 5;
$aa[8]=1;
$aa[]=6;
$aa[]=3;
$aa[]=2;
$aa[]=8;
$aa[]=10;
$aa[12]="lucky 7";
$aa[]="result";
// print($a);
print_r($aa);
echo "<br><br>".$aa[12]."<br><br>";
var_dump($aa);
echo "<br><br>";
$bb[][]="cat";
$bb[][]="dog";
$bb[][]="butterfly";
$bb[][]="mouse";
print_r($bb);
echo "<br><br>";
$bc[1][]="cat";
$bc[1][]="dog";
$bc[2][]="butterfly";
$bc[][]="mouse";
print_r($bc);
echo "<hr>";
foreach ($aa as $key => $value) {
    echo $key."-".$value."<br>";
}
echo "<hr>"
?>
