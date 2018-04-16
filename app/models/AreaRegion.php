<?php

namespace app\models;

use think\Model;

/**
 * Class AreaRegion
 */
class AreaRegion extends Model
{
    protected $table = 'area_region';

    public $timestamps = false;

    protected $fillable = [
        'shipping_area_id',
        'region_id'
    ];

    protected $guarded = [];
}
