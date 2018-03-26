<?php

namespace App\Api\Controllers;

use App\Api\Controllers\Controller;
use App\Api\Models\Banner;

class BannerController extends Controller
{

    /**
    * POST ecapi.banner.list
    */
    public function index()
    {
        $model = Banner::getList();

        return $this->json($model);
    }
}
