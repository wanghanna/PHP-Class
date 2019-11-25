<?php
print "<h1>使用rand隨機跑數字，用ifelse判斷呈現的訊息<br></h1>";
$a = rand(1,100);
echo "<h3>你的年紀為</h3><p style='color:red'>".$a."</p><br>";
if ($a >= 18){echo "可收看所有等級的電影";}
elseif($a >= 15){echo "可以收看輔導以下的電影";}
elseif($a >= 12){echo "可以看保護級以下的電影";}
else{echo "只能看普遍級的電影";}


print "<hr>";
echo "<h1>小練習</h1>";
echo "使用rand()跟if else完成抽卡機率，顯示輸出文字“你抽到了SSR卡”、“你抽到了SR卡”、“你抽到了R卡”、“你抽到了N卡”，出現機率分別為4%,10%,35%,51%<br>";
$rand = rand(1,100);
$b = "你抽到了";
if($rand < 5) echo $b."<span style='color:red'>SSR卡</span>";
elseif($rand < 15) echo $b."<span style='color:blue'>SR卡</span>";
elseif($rand < 50) echo $b."<span style='color:brown'>R卡</span>";
else echo $b."<span style='color:green'>N卡</span>";


print "<hr>";

?>