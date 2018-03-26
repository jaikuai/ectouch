<?php

namespace App\Api\Models;

use App\Api\Models\BaseModel;
use app\api\classes\Token;
use DB;

class AffiliateOrder extends BaseModel
{
    protected $connection = 'shop';
    protected $table      = 'order_info';
    protected $primaryKey = 'order_id';
    public $timestamps = false;
    protected $guarded = [];
}
