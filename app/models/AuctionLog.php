<?php

namespace app\models;

use think\Model;

/**
 * Class AuctionLog
 */
class AuctionLog extends Model
{
    protected $table = 'auction_log';

    protected $primaryKey = 'log_id';

    public $timestamps = false;

    protected $fillable = [
        'act_id',
        'bid_user',
        'bid_price',
        'bid_time'
    ];

    protected $guarded = [];
}
