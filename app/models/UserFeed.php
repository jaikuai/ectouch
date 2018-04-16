<?php

namespace app\models;

use think\Model;

/**
 * Class UserFeed
 */
class UserFeed extends Model
{
    protected $table = 'user_feed';

    protected $primaryKey = 'feed_id';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'value_id',
        'goods_id',
        'feed_type',
        'is_feed'
    ];

    protected $guarded = [];
}
