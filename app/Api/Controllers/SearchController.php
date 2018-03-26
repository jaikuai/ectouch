<?php

namespace App\Api\Controllers;

use App\Api\Controllers\Controller;
use app\api\classes\Token;
use App\Api\Models\Keywords;

class SearchController extends Controller
{
    //POST  ecapi.search.keyword.list
    public function index()
    {
        return $this->json(Keywords::getHot());
    }
}
