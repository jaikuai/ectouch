<?php

namespace app\models;

use think\Model;

/**
 * Class LinkGoods
 */
class LinkGoods extends Model
{
    protected $table = 'link_goods';

    public $timestamps = false;

    protected $fillable = [
        'goods_id',
        'link_goods_id',
        'is_double',
        'admin_id'
    ];

    protected $guarded = [];
}
