<?php

namespace app\models;

use think\Model;

/**
 * Class MemberPrice
 */
class MemberPrice extends Model
{
    protected $table = 'member_price';

    protected $primaryKey = 'price_id';

    public $timestamps = false;

    protected $fillable = [
        'goods_id',
        'user_rank',
        'user_price'
    ];

    protected $guarded = [];
}
