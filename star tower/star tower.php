<div style="width:700px;height:700px;background:#000;text-align:center;">
<?php
for($i=1;$i<50;$i+=2){

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