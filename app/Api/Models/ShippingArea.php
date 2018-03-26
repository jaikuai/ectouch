<?php

namespace App\Api\Models;

use App\Api\Models\BaseModel;

class ShippingArea extends BaseModel
{
    protected $connection = 'shop';

    protected $table      = 'shipping_area';

    public $timestamps = false;
}
