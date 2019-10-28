<?php
// Load Bootstraper
include_once __DIR__ . '/../../bootstrap/app.php';

use Prismic\Dom\RichText;

$document = $api->getByUID('page', 'about');

$description = $document->data->description;

$descriptionHtml = RichText::asHtml($description);

?>

<div>
    <a href="../">Home</a> <a href="">About</a>
</div>

<?php
echo $descriptionHtml;
?>