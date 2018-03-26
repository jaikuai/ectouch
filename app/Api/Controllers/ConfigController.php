<?php

namespace App\Api\Controllers;

use App\Api\Controllers\Controller;
use App\Api\Models\Configs;

class ConfigController extends Controller
{
    public function index()
    {
        $data = Configs::getList();
        return $this->json($data);
    }
}
