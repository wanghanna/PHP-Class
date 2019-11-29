<?php
$many = rand(3,10);
print "<h1>這次購買".$many."組樂透</h1>";
for($i=1;$i<=$many;$i++){
    echo "<p>第".$i."組號碼:";
    $ans="";
    for($j=1;$j<=6;$j++){
        $num=rand(1,49);
        $ans.="[".$num."]";        
    }
    echo $ans."</p>";
}
?>