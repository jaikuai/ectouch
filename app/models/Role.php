<?php

namespace app\models;

use think\Model;

/**
 * Class Role
 */
class Role extends Model
{
    protected $table = 'role';

    protected $primaryKey = 'role_id';

    public $timestamps = false;

    protected $fillable = [
        'role_name',
        'action_list',
        'role_describe'
    ];

    protected $guarded = [];
}
