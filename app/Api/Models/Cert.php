<?php

namespace App\Api\Models;

use App\Api\Models\BaseModel;

class Cert extends BaseModel
{
    protected $connection = 'shop';
    protected $table      = 'cert';
    public $timestamps = true;
}
