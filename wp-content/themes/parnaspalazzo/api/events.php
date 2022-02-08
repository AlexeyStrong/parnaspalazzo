<?php
define('WP_USE_THEMES', false);
require($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');
header("Content-Type: application/json");

$response = [];

$number = $_GET["number"] ?: 1;
$offset = $_GET["offset"] ?: 0;

$events = get_posts(["post_type" => "events", "numberposts" => $number, "offset" => $offset]);

$i = 0;
foreach ($events as $event) {
  $fields = get_fields($event->ID);

  $response[$i]["id"] = $event->ID;
  $response[$i]["title"] = $event->post_title;
  $response[$i]["link"] = get_permalink($event);
  $response[$i]["date"] = $fields["date"];
  $response[$i]["mainPhoto"] = $fields["main_photo"]["sizes"]["large"];

  $i++;
}

echo json_encode($response);