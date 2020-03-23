<?php
require_once ('functions.php');

$page_content = include_template ('index.php', [
'categoryi_tovarov' => $categoryi_tovarov,
'lots' => $lots,
'timer'=> $timer
]);

$layout_content = include_template('layout.php', [
'page_title' => 'Главная страница',
'is_auth' => $is_auth,
'user_avatar' => $user_avatar,
'user_name' => $user_name,
'page_content' => $page_content,
'categoryi_tovarov' => $categoryi_tovarov
]);

print($layout_content);
?>
