<?php

namespace App\Api\Controllers;

use App\Api\Controllers\Controller;
use App\Api\Models\Region;

class RegionController extends Controller
{
    public function index()
    {
        $response = Region::getList();
        return $this->json($response);
    }
}
