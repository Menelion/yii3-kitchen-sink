<?php
/**
 * This file is a simple router for the cli-server SAPI, that gets
 * started when you use `./vendor/bin/yii serve --router=router.php`
 * 
 * It's meant to gracefully handle redirect links to markdown documents, 
 * to this project pages.
 */

$redirects = [
    '2-Configuration.md' => '/site/config',
];

$path = pathinfo($_SERVER["SCRIPT_NAME"]);

if ($path["extension"] == "md") {
    if (isset($redirects[$path['basename']])) {
        header('Location: ' . $redirects[$path['basename']]);
        exit;
    }
}

return false;