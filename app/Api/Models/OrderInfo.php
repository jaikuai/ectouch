<?php

namespace App\Api\Models;

use App\Api\Models\BaseModel;
use app\api\classes\Token;

class OrderInfo extends BaseModel
{
    protected $connection = 'shop';
    protected $table      = 'order_info';
    public $timestamps = false;
}
