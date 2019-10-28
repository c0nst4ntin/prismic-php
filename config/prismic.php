<?php

use Prismic\Api;

putenv("PRISMIC_URL=https://your-repo-name.cdn.prismic.io/api/v2");
putenv("PRISMIC_ACCESS_TOKEN=your-access-token");

$url = getenv("PRISMIC_URL");
$token = getenv("PRISMIC_ACCESS_TOKEN");

$api = Api::get($url, $token);
