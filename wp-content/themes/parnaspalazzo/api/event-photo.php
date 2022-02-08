<?php
define('WP_USE_THEMES', false);
require($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');
header("Content-Type: application/json");

$response = [];

$eventId = $_GET["eventId"] ?: null;
$number = $_GET["number"] ?: 1;
$offset = $_GET["offset"] ?: 0;

if ($eventId === null) {
  echo json_encode([]);
  exit();
}

$photoList = get_fields($eventId)["photo"];

$i = 0;
foreach ($photoList as $photo) {
  $response[$i]["id"] = $photo["id"];
  $response[$i]["title"] = $photo["title"];
  $response[$i]["photoFull"] = $photo["url"];
  $response[$i]["photoPreview"] = $photo["sizes"]["large"];
  $i++;
}

echo json_encode($response);