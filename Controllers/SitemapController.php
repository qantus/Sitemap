<?php
/**
 *
 *
 * All rights reserved.
 *
 * @author Falaleev Maxim
 * @email max@studio107.ru
 * @version 1.0
 * @company Studio107
 * @site http://studio107.ru
 * @date 03/07/14.07.2014 16:37
 */

namespace Modules\Sitemap\Controllers;


use Mindy\Base\Mindy;
use Modules\Core\Controllers\CoreController;
use Modules\Sitemap\Components\SitemapIndex;


class SitemapController extends CoreController
{
    public function actionIndex()
    {
        $sitemapIndex = new SitemapIndex([
            'sitemaps' => Mindy::app()->getModule('sitemap')->getSitemaps()
        ]);
        echo $sitemapIndex->render();
    }

    public function actionView($name)
    {
        $sitemap = $this->getSitemap($name);
        if ($sitemap === null) {
            $this->error(404);
        }
        echo $sitemap->render();
    }

    protected function getSitemap($name)
    {
        $sitemaps = Mindy::app()->getModule('sitemap')->getSitemaps();
        return isset($sitemaps[$name]) ? $sitemaps[$name] : null;
    }
}
