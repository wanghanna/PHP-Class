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
echo "<h1>小練習</h1>";
echo "<p>使用ifelse ; && ; || ; flag的使用</p>";
?>
<form method="post">
<p>臉蛋:<input type="text" name = "face">true/false</p>
<p>身高:<input type="number" name = "heigh">cm</p>
<p>年薪:<input type="number" name = "money">萬</p>
<input type="submit" value="確認">
</form>
<p style="font-weight:bolder">結果:</p>
<?php
if(!empty($_POST)){
$face = $_POST['face'];
$heigh = $_POST['heigh'];
$money = $_POST['money'];
$flag = 0;
if($face) $flag++;
if($heigh >=170) $flag++;
if($money >=500) $flag++;
if($flag == 3) echo "<p style='color:red'>百分之百好男人</p>";
elseif($flag == 2) echo "<p style='color:blue'>80分的好男人</p>";
elseif($flag == 1) echo "<p>60分的好男人</p>";
else echo "<p>無優點</p>";
}
else echo"請先輸入資料";


print "<hr>";
echo "<h1>骰子遊戲</h1>";
echo "<h3>使用三元運算式</h3>";
$game = rand(1,6);
$word = "骰子點數是";
($game>3)? print ($word.$game."<br>結果為:大"): print ($word.$game."<br>結果為:小");


print "<hr>";
echo "<h1>SWITCH的使用</h1>"
?>
<form method="get">
<p>名字:<input type="text" name="name"></p>
<p>國籍:<select name="country">
<option value="tw">taiwan</option>
<option value="jp">japan</option>
</select></p>
<input type="submit" value="送出">
</form>
<?php
if(!empty($_GET['name'])){
$name = "<p style='color:blue'>".$_GET['name'];
$country = $_GET['country'];
switch($country){
    case 'tw':
        echo $name.",你是台灣人</p>";
    break;
    case 'jp':
        echo $name.",你是日本人</p>";
    break;
    default:
    echo "查無資料";
    }
}
else echo "請先輸入資料";
?>