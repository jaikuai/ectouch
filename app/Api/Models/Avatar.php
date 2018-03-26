<?php

namespace App\Api\Models;

use App\Api\Models\BaseModel;

class Avatar extends BaseModel
{
    protected $connection = 'shop';
    protected $table      = 'avatar';
    public $timestamps = false;
    protected $guarded = [];
}
