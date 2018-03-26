<?php

namespace App\Api\Models;

use App\Api\Models\BaseModel;

class VolumePrice extends BaseModel
{
    protected $connection = 'shop';

    protected $table      = 'volume_price';

    public $timestamps = false;

    protected $visible = ['volume_number', 'volume_price'];

    // protected $appends = ['volume_number', 'volume_price'];

    protected $guarded = [];
}
