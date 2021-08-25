<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/library/libconfig.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/library/libapi.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/library/libui.php");

ui_header("Homepage");
$array = json_decode("https://v1.hitokoto.cn/",true);
$hitokoto = $array['hitokoto'];
echo '<head><style>
.slideout-menu{
display:none;
}
.header--mobile{
display:none;
}
</style>
<link type="text/css" rel="styleSheet"  href="style.css" /></head><div style="float:right;max-width: 70%;padding-right:200px"><h1>一言（ヒトコト）</h1></br><p>'.$hitokoto.'</p></div>';

//取得指定位址的內容，並储存至text
$text=file_get_contents('http://1.116.217.97/');
echo '<div style="max-width: 70%;">';
echo $text;
echo '</div>
<script>
var y=document.getElementById("hitokoto");
y.innerHTML="hey";
</script>';
ui_footer();
?>
