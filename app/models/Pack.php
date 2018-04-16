<?php

namespace app\models;

use think\Model;

/**
 * Class Pack
 */
class Pack extends Model
{
    protected $table = 'pack';

    protected $primaryKey = 'pack_id';

    public $timestamps = false;

    protected $fillable = [
        'pack_name',
        'pack_img',
        'pack_fee',
        'free_money',
        'pack_desc'
    ];

    protected $guarded = [];
}
