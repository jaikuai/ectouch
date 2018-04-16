<?php

namespace app\models;

use think\Model;

/**
 * Class GoodsArticle
 */
class GoodsArticle extends Model
{
    protected $table = 'goods_article';

    public $timestamps = false;

    protected $fillable = [
        'goods_id',
        'article_id',
        'admin_id'
    ];

    protected $guarded = [];
}
