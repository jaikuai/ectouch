<?php

namespace app\models;

use think\Model;

/**
 * Class RegFields
 */
class RegFields extends Model
{
    protected $table = 'reg_fields';

    public $timestamps = false;

    protected $fillable = [
        'reg_field_name',
        'dis_order',
        'display',
        'type',
        'is_need'
    ];

    protected $guarded = [];
}
