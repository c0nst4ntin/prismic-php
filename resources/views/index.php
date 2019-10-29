<?php
// Load Bootstraper
include_once __DIR__ . '/../bootstrap/app.php';

use Prismic\Dom\RichText;

$document = $api->getByUID('page', 'homepage');

$description = $document->data->description;

$descriptionHtml = RichText::asHtml($description);

?>
<script src="js/app.min.js"></script>
<link rel="stylesheet" href="css/styles.min.css">

<div>
    <a href="">Home</a> <a href="/about">About</a>
</div>

<?php
echo $descriptionHtml;
?>