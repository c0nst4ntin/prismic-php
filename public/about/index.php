<?php

/********************************************
 *                 PHP CODE                 *
 ********************************************/
include_once __DIR__ . '/../../bootstrap/app.php';
include_once __DIR__ . '/../../app/Prismic/WebLinkResolver.php';

use Prismic\Dom\RichText;

$linkResolver = new WebLinkResolver();

$document = $api->getByUID('page', 'about');

$description = $document->data->description;

$descriptionHtml = RichText::asHtml($description, $linkResolver);

/********************************************
 *                 HTML CODE                *
 ********************************************/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Styles -->
    <link rel="stylesheet" href="../css/styles.min.css">

    <!-- Title -->
    <title>Document</title>
</head>

<body>
    <nav id="navigation">
        <a href="../">Home</a> <a href="">About</a>
    </nav>
    <main id="main">
        <section id="text">
            <?php echo $descriptionHtml; ?>
        </section>
    </main>
    <!-- Scripts -->
    <script src="../js/app.min.js"></script>
</body>

</html>