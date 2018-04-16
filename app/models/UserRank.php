<?php

namespace app\models;

use think\Model;

/**
 * Class UserRank
 */
class UserRank extends Model
{
    protected $table = 'user_rank';

    protected $primaryKey = 'rank_id';

    public $timestamps = false;

    protected $fillable = [
        'rank_name',
        'min_points',
        'max_points',
        'discount',
        'show_price',
        'special_rank'
    ];

    protected $guarded = [];
}
