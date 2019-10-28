<?php
// Autoload Vendor Files
include_once __DIR__ . '/../vendor/autoload.php';

// Get Prismic Configuration
require_once __DIR__ . "/../src/prismic.php";

use Prismic\Dom\RichText;

$document = $api->getByUID('page', 'about');

$description = $document->data->description;

$descriptionHtml = RichText::asHtml($description);

echo $descriptionHtml;
