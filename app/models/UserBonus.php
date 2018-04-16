<?php

namespace app\models;

use think\Model;

/**
 * Class UserBonus
 */
class UserBonus extends Model
{
    protected $table = 'user_bonus';

    protected $primaryKey = 'bonus_id';

    public $timestamps = false;

    protected $fillable = [
        'bonus_type_id',
        'bonus_sn',
        'user_id',
        'used_time',
        'order_id',
        'emailed'
    ];

    protected $guarded = [];
}
