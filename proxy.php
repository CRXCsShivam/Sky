<?php
$url = "https://livecricketsl.online/hls/live/stream.php?ch=skyc";
$content = file_get_contents($url);
echo $content;
?>
