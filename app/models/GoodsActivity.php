<?php

namespace app\models;

use think\Model;

/**
 * Class GoodsActivity
 */
class GoodsActivity extends Model
{
    protected $table = 'goods_activity';

    protected $primaryKey = 'act_id';

    public $timestamps = false;

    protected $fillable = [
        'act_name',
        'act_desc',
        'act_type',
        'goods_id',
        'product_id',
        'goods_name',
        'start_time',
        'end_time',
        'is_finished',
        'ext_info'
    ];

    protected $guarded = [];
}
