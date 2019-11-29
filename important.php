<?php
echo "教程: "."https://www.w3school.com.cn/"."<br><br>";
echo "手冊:"."https://www.php.net/manual/zh/function.date.php"."<br><br>";
?>
<?php
echo "定義變數的前置符號為'$'+英文字碼(大小寫不同)之後可以加數字<hr>";
?>

<?php
echo "<h3>輸出方式</h3>";
print "echo / print / print_r() / var_dump()<hr>";
?>

<?php
echo "<h3>方程式</h3>";
print "+ ; - ; * ; /<br>+= ; -= ; ++ ; --<br>.=<hr>"
?>

<?php
echo "<h3>判斷式</h3>";
echo "if(條件式){}<br>
elseif(條件式){}<br>
else{}<hr>";
?>

<?php
echo "<h3>是否存在</h3>";
print "isset() ; empty() ; is_null()<hr>";
?>

<?php
echo "<h3>使用flag的方式做判斷式</h3>";
echo "flag = 0<br>flag++<br>flag--<hr>";
?>

<?php
echo "<h3>三元運算式</h3>";
echo "ans = (條件)?TRUE結果:FALSE結果<hr>";
?>

<?php
echo "<h3>switch(){case: break...default}</h3>";
echo "switch(變數){case '變數值': 結果 break...default}<hr>";
?>

<?php
echo "<h3>載入檔案</h3>";
echo "include();include_once();require();require_once()<hr>";
?>

<?php
echo "<h3>for迴圈</h3>";
echo "for(起始值; 執行的條件; 每次執行後要做的事){事件};<hr>"
?>

<?php
echo "<h3>while</h3>";
echo "while(條件){事件}<hr>";
?>

<?php
echo "<h3>do while</h3>";
echo "do{事件}while(條件)<hr>";
?>

<?php
echo "<h3>陣列[]</h3>";
echo "寫法1:變數[]=值<br>";
echo "寫法2:變數=array('值1','值2','值3')<br>";
echo "寫法3:變數=array('cat'=>'加菲貓','dog'=>'史奴比','mouse'=>'米老鼠')<br>";
echo "print_r()<br>";
echo "二維陣列"."變數[][]<br>";
?>
<hr>
<?php
echo "<h3>foreach (variable as key => value) {
    # code...
}</h3>";
echo "foreach(){}"." 就像for的用法，但是專門給陣列所使用<br>";
?>
<hr>
<?php
echo "<h3>unset()</h3>";
?>

<?php
echo "<h3>date()</h3>";
echo "<h3>strtotime()</h3>";
echo "<h3>date_default_timezone_set('Asia/Taipei')</h3>"
?>
<hr>
<?php
echo "<h3>數學方程式ceil()無條件進位/floor()無條件捨去/round()四捨五入</h3>";
?>
<hr>
<?php
echo "<h3>substr()截取字串-英文用</h3>";
echo "<h3>mb_substr()截取字串-非英文用</h3>";
echo "substr(字串,起始值,數量)";
?>
<hr>
<?php
echo "<h3>md5() 可以將值轉成亂碼，通常用在密碼</h3>";
echo "<h3>chr() 可以查詢ASCII碼</h3>"
?>
<hr>
<?php
echo "<h3>function(){}</h3>";

?>

<?php
echo "<h3>POST/GET</h3>";
echo "mehtod:'POST'/method:'GET'";
?>

<?php
echo "<h3>_COOKIE[]:存在客戶端/_SESSION[]:存在伺服器+session_start()</h3>";
echo "<p></p>unset()/session_unset()/session_destroy()</p>";
echo "<p>setcookie(變數,值,生命週期,指定有效的網域,資料加密)</p>";
echo "<p>ex: setcookie('name','admin',time()+10)</p>";
?>
<hr>
<?php
echo "<h3>form method='post' enctyle='mulitpart/form-data' form</h3> ";
echo "<h3>input <b>type='file' <h3>";
echo "<h3>print_r(_file)</h3>";
echo "<h5>_FILES['mypic1']['name']</h5>";
echo "<h5>_FILS['mypic1']['tmp_name']</h5>";
echo "<h5>_FILES['mypic1']['type']</h5>";
echo "<h5>_FILES['mypic1']['size']</h5>";
echo "<h5>copy(from,to)</h5>";
echo "<p>copy(_FILES['mypic1'][tmp_name],'upload/'._FILES['mypic1']['name'])</p>";
echo "<p>unlink('upload/20190624132119koala.jpg'])</p>";
echo "<p>變數='檔案名稱.jpg';unlink('檔案路徑/'.變數)</p>"
?>