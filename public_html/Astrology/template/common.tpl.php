<?php
include __DIR__ . '/../SiteCommon.php';

$siteCommon = new SiteCommon();
/**
 * Header
 * */
$title = $site['title'] ?? 'title';
$meta_content = $site['meta_content'] ?? 'no Content';
$heading = $site['heading'] ?? 'Heading';
$styleSheet = $siteCommon->styleSheet($site['style_sheet'] ?? []);

function siteHeader() {
    return new SiteCommon();
}

$header = "<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>{$title}</title>
                {$styleSheet}
            </head>
            <body>
                <div id='Header' class='header'>
                    <div class='sub-header'>
                        <div class='menu-left'>
                            <h1>{$heading}</h1>
                        </div>
                        <div class='menu-right'>
                            <a href='#About'>About Me</a>
                        </div>
                    </div>
                </div>";
