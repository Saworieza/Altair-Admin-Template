<?php
// show all pages

echo '"login.html",<br/>';
echo '"error_404.html",<br/>';
echo '"error_500.html",<br/>';

$files = glob('../php/views/*.php', GLOB_BRACE);
foreach($files as $file) {
    $file = str_replace('../php/views/', '', $file);
    $file = str_replace('.php', '', $file);
    echo '"' . $file . '",<br/>';
}