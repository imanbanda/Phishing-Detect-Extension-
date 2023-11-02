<?php
header("Access-Control-Allow-Origin: *");

$site = $_POST['url'];

// Check if URL is valid and begins with http:// or https://
if (!filter_var($site, FILTER_VALIDATE_URL) || !preg_match("/^https?:\/\//i", $site)) {
  echo "Invalid URL provided";
  exit;
}

$html = file_get_contents($site);
$bytes = file_put_contents('markup.txt', $html);
$decision = exec("python test.py $site 2>&1 ");
echo $decision;
?>