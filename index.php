<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<a href="https://gabed.net/">Gabed.net</a>
<?php
echo "Hello World!";
?>
<?php
header("HTTP/1.1 301 Moved Permanently");
header("Location: https://gabed.net/iloader/twitch-clip-downloader");
header("Connection: close");
?>
  
  
  <?php
$uri=$_SERVER['REQUEST_URI'];
$newuri=preg_replace('|\/(.*)|', '', $url);
header( 'Location: https://gabed.net/iloader/twitch-clip-downloader'.$newuri);
?>
</body>
</html>
