<?php

return [
    '/sitemap.xml' => [
        'name' => 'index',
        'callback' => '\Modules\Sitemap\Controllers\SitemapController:index'
    ],
    '/sitemap-{name:\w+}.xml' => [
        'name' => 'view',
        'callback' => '\Modules\Sitemap\Controllers\SitemapController:view'
    ]
];
