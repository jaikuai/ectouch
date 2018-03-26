<?php

namespace App\Api\Models;

use App\Api\Models\BaseModel;

class AreaRegion extends BaseModel
{
    protected $connection = 'shop';

    protected $table      = 'area_region';

    public $timestamps = false;

    protected $visible = [];
}
