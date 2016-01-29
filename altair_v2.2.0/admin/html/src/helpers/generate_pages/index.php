<?php

    function curl_html($url,$out) {
        $cmd = "curl '$url' -o $out";
        exec($cmd);
    }

    for($i=0;$i<2;$i++) {

        $server = 'http://altair_html.local/';
        $app_version = '2.2.0';

        if($i==0) {
            $release = "&release=1";
            $folder = '../../_release/'.$app_version.'/_demo_site/html/';
        } else {
            $release = '';
            $folder = '../../_release/'.$app_version.'/altair_v'.$app_version.'/admin/html/dist/';
        }

        if (is_dir($folder)) {
            array_map('unlink', glob($folder."*.html"));
        }

        curl_html($server."login.php?generate".$release,$folder."login.html");
        curl_html($server."error_404.php?generate".$release,$folder."error_404.html");
        curl_html($server."error_500.php?generate".$release,$folder."error_500.html");

        $files = glob(dirname(__FILE__).'/../../php/views/*.php', GLOB_BRACE);
        foreach($files as $file) {
            $file = str_replace(dirname(__FILE__).'/../../php/views/', '', $file);
            $file = str_replace('.php', '', $file);
            curl_html($server."index.php?generate".$release."&page=".$file, $folder.$file.".html");
        }
    }