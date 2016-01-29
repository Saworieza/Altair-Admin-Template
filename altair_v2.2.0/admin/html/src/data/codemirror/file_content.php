<?php

$files = [
    'wp_config.php',
    'main.js',
    'email_template.html',
    'data.json'
];
$requiredFile = $_GET['file'];
$fileInfo =  new SplFileInfo($requiredFile);

if(in_array($requiredFile,$files)) {
    if($fileInfo->getExtension() == 'php') {
        header('Content-type: application/x-httpd-php');
    }
    echo file_get_contents($_GET['file']);
} else {
    echo 'ACCESS DENIED!';
}