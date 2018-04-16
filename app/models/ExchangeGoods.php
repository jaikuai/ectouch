<?php

namespace app\models;

use think\Model;

/**
 * Class ExchangeGoods
 */
class ExchangeGoods extends Model
{
    protected $table = 'exchange_goods';

    protected $primaryKey = 'goods_id';

    public $timestamps = false;

    protected $fillable = [
        'exchange_integral',
        'is_exchange',
        'is_hot'
    ];

    protected $guarded = [];
}
