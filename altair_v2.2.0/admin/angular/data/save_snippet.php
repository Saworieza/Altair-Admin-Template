<?php

$json_file = 'snippets.json';

$json = file_get_contents($json_file);
$json_data = json_decode($json);

$data = array(
    'language' => htmlspecialchars($_POST['language']),
    'title' => htmlspecialchars($_POST['title']),
    'content' => htmlspecialchars($_POST['content'])
);

$json_data[] = $data;
file_put_contents($json_file, json_encode($json_data, JSON_PRETTY_PRINT));