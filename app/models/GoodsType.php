<?php

namespace app\models;

use think\Model;

/**
 * Class GoodsType
 */
class GoodsType extends Model
{
    protected $table = 'goods_type';

    protected $primaryKey = 'cat_id';

    public $timestamps = false;

    protected $fillable = [
        'cat_name',
        'enabled',
        'attr_group'
    ];

    protected $guarded = [];
}
