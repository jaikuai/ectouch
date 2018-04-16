<?php

namespace app\models;

use think\Model;

/**
 * Class GoodsCat
 */
class GoodsCat extends Model
{
    protected $table = 'goods_cat';

    public $timestamps = false;

    protected $fillable = [
        'goods_id',
        'cat_id'
    ];

    protected $guarded = [];
}
