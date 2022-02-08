<?php
add_action("init", function () {
  register_post_type("events", [
    "labels" => [
      "name" => "Мероприятия",
      "singular_name" => "Мероприятие",
      "add_new" => "Добавить",
      "add_new_item" => "Добавление",
      "edit_item" => "Редактирование"
    ],
    "public" => true,
    "show_in_rest" => true,
    "has_archive" => false,
    "rewrite" => ["slug" => "/"],
    "supports" => ["title"],
    "menu_icon" => "dashicons-screenoptions",
  ]);
});

function _set_post_type($query): bool {
  if (!$query->is_main_query() || count($query->query) != 2 || !isset($query->query["page"]) || empty($query->query["name"])) {
    return false;
  }
  $query->set("post_type", ["events"]);
  return true;
}

add_action("pre_get_posts", "_set_post_type");

