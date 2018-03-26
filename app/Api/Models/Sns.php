<?php

namespace App\Api\Models;

use App\Api\Models\BaseModel;

class Sns extends BaseModel
{
    protected $connection = 'shop';
    protected $table      = 'sns';
    protected $primaryKey = 'user_id';
    public $timestamps = true;
}
