<?php

namespace app\models;

use think\Model;

/**
 * Class Payment
 */
class Payment extends Model
{
    protected $table = 'payment';

    protected $primaryKey = 'pay_id';

    public $timestamps = false;

    protected $fillable = [
        'pay_code',
        'pay_name',
        'pay_fee',
        'pay_desc',
        'pay_order',
        'pay_config',
        'enabled',
        'is_cod',
        'is_online'
    ];

    protected $guarded = [];
}
