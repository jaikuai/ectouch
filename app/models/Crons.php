<?php

namespace app\models;

use think\Model;

/**
 * Class Crons
 */
class Crons extends Model
{
    protected $table = 'crons';

    protected $primaryKey = 'cron_id';

    public $timestamps = false;

    protected $fillable = [
        'cron_code',
        'cron_name',
        'cron_desc',
        'cron_order',
        'cron_config',
        'thistime',
        'nextime',
        'day',
        'week',
        'hour',
        'minute',
        'enable',
        'run_once',
        'allow_ip',
        'alow_files'
    ];

    protected $guarded = [];
}
