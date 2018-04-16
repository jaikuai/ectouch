<?php

namespace app\models;

use think\Model;

/**
 * Class ErrorLog
 */
class ErrorLog extends Model
{
    protected $table = 'error_log';

    public $timestamps = false;

    protected $fillable = [
        'info',
        'file',
        'time'
    ];

    protected $guarded = [];
}
