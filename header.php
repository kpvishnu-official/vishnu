<?php

$header = <<<HEADER 
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="description" content="Just for training my coding skill and knowledge">
                <title>{$subHeader ?? 'My title'}</title>
                <link rel="stylesheet" href="style.css">
            </head>
            <body>
                <div id="Header" class="header">
                    <div class="sub-header">
                        <div class="menu-left">
                            <h1>Vishnu Kp</h1>
                        </div>
                        <div class="menu-right">
                            <a href="#About">About Me</a>
                        </div>
                    </div>
                </div>
            HEADER;
