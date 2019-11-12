<?php

use Prismic\LinkResolver;
use Prismic\Dom\RichText;
use Prismic\Dom\Link;

class WebLinkResolver extends LinkResolver
{
    public function resolve($link): ?string
    {
        if ($link->type === 'page') {
            if ($link->uid === 'homepage') {
                return '/';
            }
            return '/' . $link->uid;
        }
        return '/';
    }
}
