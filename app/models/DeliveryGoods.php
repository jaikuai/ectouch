<?php

namespace app\models;

use think\Model;

/**
 * This is the model class for table "{{%delivery_goods}}".
 *
 * @property string $rec_id
 * @property string $delivery_id
 * @property string $goods_id
 * @property string $product_id
 * @property string $product_sn
 * @property string $goods_name
 * @property string $brand_name
 * @property string $goods_sn
 * @property int $is_real
 * @property string $extension_code
 * @property string $parent_id
 * @property int $send_number
 * @property string $goods_attr
 */
class DeliveryGoods extends Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%delivery_goods}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['delivery_id', 'goods_id', 'product_id', 'parent_id', 'send_number'], 'integer'],
            [['goods_attr'], 'string'],
            [['product_sn', 'brand_name', 'goods_sn'], 'string', 'max' => 60],
            [['goods_name'], 'string', 'max' => 120],
            [['is_real'], 'string', 'max' => 1],
            [['extension_code'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rec_id' => 'Rec ID',
            'delivery_id' => 'Delivery ID',
            'goods_id' => 'Goods ID',
            'product_id' => 'Product ID',
            'product_sn' => 'Product Sn',
            'goods_name' => 'Goods Name',
            'brand_name' => 'Brand Name',
            'goods_sn' => 'Goods Sn',
            'is_real' => 'Is Real',
            'extension_code' => 'Extension Code',
            'parent_id' => 'Parent ID',
            'send_number' => 'Send Number',
            'goods_attr' => 'Goods Attr',
        ];
    }
}
