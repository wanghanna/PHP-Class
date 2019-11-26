<h1>練習 - 漸層(for迴圈)</h1>
<p>產生51顆★一顯示，第一顆★的顏色為rgb(0,0,255),最後一顆為rgb(255,0,0), 星星顏色漸層變化
</p>
<?php
for($i=0;$i<255;$i+=5){
    echo "<span style='color:rgb(".$i.",0,".(255-$i).")'>★</span>";
}
?>
<hr>
<h1>練習 - 雙for迴圈</h1>
<p><b>九九乘法表</b></P>
<table>
<?php
for($i=0;$i<9;$i++){
    echo "<tr>";
    for($j=1;$j<10;$j++){
        echo "<td style='width:60px;color:rgb(".($i*28).",0,".(255-$i*28).")'>".$j."x".($i+1)."=".($i+1)*$j."</td>";
    }
    echo "</tr>";
}
?>
</table>
<hr>
<h1>練習 - while / do while</h1>
<h2>while</h2>
<?php
$a = 0;
while($a < 11){
    echo $a;
    $a++;
        
}
?>
<h2>do while</h2>
<?php
$b = 10;
do{
    echo $b;
    $b--;    
}
while($b != 0);
?>