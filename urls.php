<?php

return [
    '/sitemap.xml' => [
        'name' => 'html',
        'callback' => '\Modules\Sitemap\Controllers\SitemapController:index'
    ],
    '/sitemap-{name:\w+}.xml' => [
        'name' => 'view',
        'callback' => '\Modules\Sitemap\Controllers\SitemapController:view'
    ],
    '/sitemap' => [
        'name' => 'html',
        'callback' => '\Modules\Sitemap\Controllers\SitemapController:html'
    ],
];
