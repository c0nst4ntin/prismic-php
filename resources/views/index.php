<?php
// Load Bootstraper
include_once __DIR__ . '/../bootstrap/app.php';

use Prismic\Dom\RichText;

$document = $api->getByUID('page', 'homepage');

$description = $document->data->description;

$descriptionHtml = RichText::asHtml($description);

echo '<script src="' . path_relative_to_root(__DIR__) . 'js/app.min.js"></script>';
echo '<link rel="stylesheet" href="' . path_relative_to_root(__DIR__) . 'css/styles.min.css"/>';
?>

<div>
    <a href="">Home</a> <a href="/about">About</a>
</div>

<?php
echo $descriptionHtml;
?>