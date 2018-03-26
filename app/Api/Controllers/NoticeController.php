<?php

namespace App\Api\Controllers;

use App\Api\Controllers\Controller;
use App\Api\Models\Card;
use App\Api\Models\Notice;

class NoticeController extends Controller
{

    /**
    * POST ecapi.notice.list
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

        $model = Notice::getList($this->validated);

        return $this->json($model);
    }

    /**
    * GET notice.{id:[0-9]+}
    */
    public function show($id)
    {
        return Notice::getNotice($id);
    }
}
