<?php
namespace Craft;

class Htmlcache_WebhookController extends BaseController
{
    protected $allowAnonymous = true;

    public function actionClearCache()
    {
        craft()->htmlcache_htmlcache->clearCacheFiles();
    }
}