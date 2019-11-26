<?php
if(!empty($_GET['movie'])){
switch($_GET['movie']){
    case '1':
        include_once("movie1.php");
    break;
    case '2':
        include_once("movie2.php");
    break;
    case '3':
        include_once("movie3.php");
    break;
}
include_once("layout.php");
}
else echo "<h1>電影介紹</h1><a href='?movie=1'><button>決戰中途島</button></a><br><br><a href='?movie=2'><button>魔鬼終結者：黑暗宿命</button></a><br><br><a href='?movie=3'><button>黑魔女2</button></a>";

?>
