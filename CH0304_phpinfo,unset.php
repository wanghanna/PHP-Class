<?php
// phpinfo();
$ary1=array("cat"=>"加菲貓","dog"=>"史奴比","mouse"=>"米老鼠");
print_r($ary1);
echo "<br>";
$abc=123;
echo $abc;
unset($abc);
echo $abc;
unset($ary1['cat']);
print_r($ary1);
echo "<br>";
$abc="ABC";
echo $abc."<br>";
$efg="ABC";
echo $efg;
unset($abc);//刪除這個變數，已經沒有這個變數了
echo $abc;
$efg=null;//這個變數是存在的，但是沒有型態
echo $efg;
$abc="";//有這個變數，且是一個實體空字串
echo $abc;
?>