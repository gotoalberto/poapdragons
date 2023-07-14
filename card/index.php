<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

function read_and_delete_first_line($filename) {
  $file = file($filename);
  $line = $file[0];
  unset($file[0]);
  file_put_contents($filename, $file);
  return $line;
}

function redirect($link) {
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: '.$link);
}

$filename = htmlspecialchars($_GET["card"]).'.txt';
$link = read_and_delete_first_line($filename);

if(substr($link, 0, 4) == "http") {
	redirect($link);
} else {
	redirect('empty/');
	unlink($filename);
}
?>