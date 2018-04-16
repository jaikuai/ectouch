<?php

namespace app\models;

use think\Model;

/**
 * Class EmailList
 */
class EmailList extends Model
{
    protected $table = 'email_list';

    public $timestamps = false;

    protected $fillable = [
        'email',
        'stat',
        'hash'
    ];

    protected $guarded = [];
}
