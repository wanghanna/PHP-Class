<?php
echo "<h3 style='color:blue'>密碼設置為亂碼，並判斷: </h3><br>";
?>
<form method="post">
<p>輸入密碼:</p>
<input type="password" name="pas1">
<input type="submit" value="送出確認">
</form>
<?php
if(!empty($_POST['pas1'])){
echo "你輸入的密碼為".$_POST['pas1'];
print "<br>";
echo "經過亂數後為: ".$pw1=md5($_POST['pas1']);
print "<br>";
echo "正確密碼為: ".$p2="1234";
print "<br>";
echo "將原密碼轉為亂數用於和輸入的密碼比對: ".$pw2=md5($p2);
print "<br>";
echo "比對結果: ";
if($pw1==$pw2) echo "密碼正確";
else echo "密碼錯誤";
}
else echo "請先輸入密碼";
?>
<hr>
<?php
echo "<h3 style='color:blue'>ASCII碼的應用: </h3><br>";
echo chr(68);
print "<br>";
echo "<h3 style='color:blue'>隨機產生長度8的密碼: </h3>";
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
print "<h3 style='color:blue'>隨機產生五組，8~12長度的密碼，包含數字，英文大小寫的組合:</h3><br>";
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
<hr>
<h3>使用function</h3>
<?php
$ans=pwd(10);
function pwd($many){
if($many==0)echo "請輸入數字";
else {    
    for($i=1;$i<=$many;$i++){        
        $max=rand(8,12);
        $pwdstr="";
        for($j=1;$j<=8;$j++){
            $pas=rand(1,62);
            if($pas<11) $pwdstr.=(chr($pas+47));
            elseif($pas<37) $pwdstr.=(chr($pas+54));
            else $pwdstr.=(chr($pas+60)); 
        }
        $ary[]=$pwdstr;
    }
    return $ary;
}
}
foreach($ans as $key => $val){
    echo "第".($key+1)."組密碼:".$val."<br>";
}

?>