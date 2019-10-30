<?php

// Autoload Vendor Files
include_once __DIR__ . '/../vendor/autoload.php';

// Get Prismic Configuration
require_once __DIR__ . "/../config/prismic.php";

function path_relative_to_root ($file_path) {
    $root = realpath(__DIR__ . "/../");
    $relative = str_replace($root, "", $file_path);
    $offset = "./";
    for ($i = 0; $i < sizeof(explode("/", $relative)) - 2; $i++) {
        $offset .= "../";
    }
    return $offset;
}