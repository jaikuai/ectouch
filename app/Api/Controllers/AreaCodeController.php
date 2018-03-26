<?php

namespace App\Api\Controllers;

use App\Api\Controllers\Controller;
use App\Api\Models\AreaCode;

class AreaCodeController extends Controller
{
    /**
    * POST ecapi.areacode.list
    */
    public function index()
    {
        $model = AreaCode::getList();

        return $this->json($model);
    }
}
