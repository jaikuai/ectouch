<?php

namespace App\Api\Controllers;

use App\Api\Controllers\Controller;
use App\Api\Models\BonusType;
use App\Api\Models\Features;
use app\api\classes\Token;

class CashGiftController extends Controller
{

    /**
    * POST ecapi.cashgift.list
    */
    public function index()
    {
        $rules = [
            'page'      => 'required|integer|min:1',
            'per_page'  => 'required|integer|min:1',
            'status'    => 'required|integer',
        ];

        if ($res = Features::check('cashgift')) {
            return $this->json($res);
        }

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $model = BonusType::getListByUser($this->validated);

        return $this->json($model);
    }

    /**
    * POST ecapi.cashgift.available
    */
    public function available()
    {
        $rules = [
            'page'          => 'required|integer|min:1',
            'per_page'      => 'required|integer|min:1',
            'total_price'   => 'required|numeric|min:0',
        ];

        if ($res = Features::check('cashgift')) {
            return $this->json($res);
        }

        if ($error = $this->validateInput($rules)) {
            return $error;
        }

        $model = BonusType::getAvailableListByUser($this->validated);

        return $this->json($model);
    }
}
