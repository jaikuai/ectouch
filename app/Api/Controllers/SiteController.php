<?php

namespace App\Api\Controllers;

use App\Api\Controllers\Controller;
use App\Api\Models\ShopConfig;

class SiteController extends Controller
{
    //POST  ecapi.site.get
    public function index()
    {
        return $this->json(ShopConfig::getSiteInfo());
    }
}
