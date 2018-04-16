<?php

namespace app\models;

use think\Model;

/**
 * Class CatRecommend
 */
class CatRecommend extends Model
{
    protected $table = 'cat_recommend';

    public $timestamps = false;

    protected $fillable = [
        'cat_id',
        'recommend_type'
    ];

    protected $guarded = [];
}
