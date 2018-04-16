<?php

namespace app\models;

use think\Model;

/**
 * Class VolumePrice
 */
class VolumePrice extends Model
{
    protected $table = 'volume_price';

    public $timestamps = false;

    protected $fillable = [
        'price_type',
        'goods_id',
        'volume_number',
        'volume_price'
    ];

    protected $guarded = [];
}
