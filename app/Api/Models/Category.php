<?php

namespace App\Api\Models;

use App\Api\Models\BaseModel;

class Category extends BaseModel
{
    protected $connection = 'shop';
    protected $table      = 'category';
    public $timestamps = false;
    protected $guarded = [];
}
