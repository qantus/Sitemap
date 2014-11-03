<?php

return [
    '/sitemap.xml' => [
        'name' => 'xml',
        'callback' => '\Modules\Sitemap\Controllers\SitemapController:index'
    ],
    '/sitemap-{name:[A-Za-z0-9-]+}.xml' => [
        'name' => 'view',
        'callback' => '\Modules\Sitemap\Controllers\SitemapController:view'
    ],
    '/sitemap-html' => [
        'name' => 'html',
        'callback' => '\Modules\Sitemap\Controllers\SitemapController:html'
    ],
];
