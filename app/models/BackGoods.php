<?php

namespace app\models;

use think\Model;

/**
 * This is the model class for table "{{%back_goods}}".
 *
 * @property string $rec_id
 * @property string $back_id
 * @property string $goods_id
 * @property string $product_id
 * @property string $product_sn
 * @property string $goods_name
 * @property string $brand_name
 * @property string $goods_sn
 * @property int $is_real
 * @property int $send_number
 * @property string $goods_attr
 */
class BackGoods extends Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%back_goods}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['back_id', 'goods_id', 'product_id', 'send_number'], 'integer'],
            [['goods_attr'], 'string'],
            [['product_sn', 'brand_name', 'goods_sn'], 'string', 'max' => 60],
            [['goods_name'], 'string', 'max' => 120],
            [['is_real'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rec_id' => 'Rec ID',
            'back_id' => 'Back ID',
            'goods_id' => 'Goods ID',
            'product_id' => 'Product ID',
            'product_sn' => 'Product Sn',
            'goods_name' => 'Goods Name',
            'brand_name' => 'Brand Name',
            'goods_sn' => 'Goods Sn',
            'is_real' => 'Is Real',
            'send_number' => 'Send Number',
            'goods_attr' => 'Goods Attr',
        ];
    }
}
