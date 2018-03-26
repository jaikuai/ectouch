<?php

namespace App\Api\Controllers;

use App\Api\Controllers\Controller;
use App\Api\Models\Brand;

class BrandController extends Controller
{

    /**
    * POST ecapi.brand.list
    */
    public function index()
    {
        $rules = [
            'page'      => 'required|integer|min:1',
            'per_page'  => 'required|integer|min:1',
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $model = Brand::getList($this->validated);

        return $this->json($model);
    }

    /**
    * POST ecapi.recommend.brand.list
    */
    public function recommend()
    {
        $rules = [
            'page'      => 'required|integer|min:1',
            'per_page'  => 'required|integer|min:1',
        ];

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $model = Brand::getListByOrder($this->validated);

        return $this->json($model);
    }
}
