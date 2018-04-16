<?php

namespace app\models;

use think\Model;

/**
 * Class Agency
 */
class Agency extends Model
{
    protected $table = 'agency';

    protected $primaryKey = 'agency_id';

    public $timestamps = false;

    protected $fillable = [
        'agency_name',
        'agency_desc'
    ];

    protected $guarded = [];
}
