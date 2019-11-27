<?php
echo date("Y-m-d H:i:s");
print "<br>";
echo "strtotime(+6 hours)=>".$timeFix=strtotime("+6 hours");
print "<hr>";
echo date("Y-m-d H:i:s",$timeFix);
print "<hr>";
date_default_timezone_set('Asia/Taipei');
echo $now=date("Y-m-d H:i:s");
?>
<hr>
<?php
echo $c=18/5;
print "<br>";
echo "ceil無條件進位=>".ceil($c)."<br>";
echo "floor無條件捨去=>".floor($c)."<br>";
echo "round四捨五入=>".round($c)."<br>";
?>
<hr>
<?php
echo "截取字串: <br>";
$d=12358465;
echo substr($d,2,1);
print "<br>";
$z="參加職訓得到很多東西";
echo mb_substr($z,2,4);
?>
<hr>
<?php
echo "密碼設置為亂碼，並判斷: <br>";
$p1="12346789";
echo $pw1=md5($p1);
print "<br>";
$p2="12346789";
echo $pw2=md5($p2);
print "<br>";
if($pw1==$pw2) echo "密碼正確";
else echo "密碼錯誤";
?>
<hr>
<?php
echo "ASCII碼的應用: <br>";
echo chr(68);
print "<br>";
echo "隨機產生長度8的密碼: ";
//ASCII碼chr();
//0-9=>48~57,A-Z=>65~90,a-z=>97~122
for($i=1;$i<9;$i++){
    $word=rand(1,62);
    if($word<11) echo chr($word+47);
    elseif($word<37) echo chr($word+54);
    else echo chr($word+60);
}
echo "<br>";
echo "使用for+for<br>";
print "隨機產生五組，8~12長度的密碼，包含數字，英文大小寫的組合:<br>";
for($i=1;$i<6;$i++){
    echo "第".$i."組: ";
    $len=rand(8,12);
    for($j=0;$j<$len;$j++){
        $pas=rand(1,62);
        if($pas<11)echo chr($pas+47);
        elseif($pas<37) echo  chr($pas+54);
        else echo chr($pas+60);
    }
    echo "<br>";
}
print "<hr>";
echo "使用while+for<br>";
$num=1;
while($num<6){
    echo "第".$num."組: ";
    $len=rand(8,12);
    for($j=0;$j<$len;$j++){
        $pas=rand(1,62);
        if($pas<11)echo chr($pas+47);
        elseif($pas<37) echo  chr($pas+54);
        else echo chr($pas+60); 
    };
    echo "<br>";
    $num++;
}
?>