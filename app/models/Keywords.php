<?php

namespace app\models;

use think\Model;

/**
 * Class Keywords
 */
class Keywords extends Model
{
    protected $table = 'keywords';

    public $timestamps = false;

    protected $fillable = [
        'date',
        'searchengine',
        'keyword',
        'count'
    ];

    protected $guarded = [];
}
