<div style="width:100vw;height:100vh;background:#000;text-align:center;">
<?php
for($i=1;$i<70;$i+=2){

    for($j=1;$j<=$i;$j++){
        $colorSet = rand(1,10);
        if($colorSet == 1){
            echo "<span style='color:red'>★</span>";
        }
   
    elseif($colorSet <= 3){
        echo "<span style='color:blue'>★</span>";
    }
    elseif($colorSet <= 6){
        echo "<span style='color:yellow'>★</span>";
    }
    else{
        echo "<span style='color:pink'>★</span>";
    } 
}
    echo "<br>";
}
?>
</div>