<?php
/**
 * Built assets aren't currently routeable via vercel-php
 * Manually route assets to be found
 */
if ($_GET['type'] === 'css') {
    header("Content-type: text/css; charset: UTF-8");
    echo require __DIR__ . '/../public/css/' . basename($_GET['file']);
} else if ($_GET['type'] === 'js') {
    header('Content-Type: application/javascript; charset: UTF-8');
    echo require __DIR__ . '/../public/js/' . basename($_GET['file']);
} else if ($_GET['type'] === 'img') {
    header('Content-Type: image/png');
    echo require __DIR__ . '/../public/images/' . basename($_GET['file']);
} else {
    header('Content-Type: text/html; charset=UTF-8');
    echo require __DIR__ . '/../public/' . basename($_GET['file']);
}