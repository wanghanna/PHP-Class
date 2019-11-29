<style>
@keyframes go{
    from{
transform:rotate(0deg);
    }
    to{
transform:rotate(360deg);
    }
}
</style>
<body style="width:100vw;height:100vh;background:black">
 <?php
 $starNum=rand(20,150);
for($i=1;$i<=$starNum;$i++){
$poT=rand(0,100);
$poL=rand(0,100);
$size=rand(20,80);
$colorSetR=rand(100,255);
 $colorSetG=rand(50,255);
 $colorSetB=rand(200,255);
 $time=rand(10,100)/10;
echo "<span style='color:white;position:absolute;top:".$poT."vh;left:".$poL."vw;font-size:".$size."px;color:rgb(".$colorSetR.",".$colorSetG.",".$colorSetB.");animation:go ".$time."s linear infinite;'>★</span>";
}
?>   
</body>
