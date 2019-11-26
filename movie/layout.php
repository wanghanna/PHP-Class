<div style="display:flex">
<!-- 內容 -->
<div>
<h2 style="padding-top:20px">電影名稱</h2>
<h1><?=$name?></h1>
<hr>
<h2 style="padding-top:20px">介紹</h2>
<p><?=$info?></p>
<hr>
<h2 style="padding-top:20px">演員列表(例)</h2>
<ul><?=$userlist?></ul>
</div>
<!-- 劇照 -->
<div style="display:flex;flex-direction:column;text-align:center;width:30vw">
<img src="img/<?=$img?>" alt="決戰中途島" title="決戰中途島" style="margin: 10px;border: 20px solid #ccc;width:300px">
<a href="content.php"><button>回上一頁</button></a>
</div>
</div>