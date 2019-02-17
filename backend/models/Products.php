<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $user_email
 * @property string $name
 * @property string $description
 * @property int $ikey
 * @property string $amount
 * @property string $quantity
 * @property string $availability
 * @property string $product_condition
 * @property string $brand
 * @property string $stock
 * @property string $image
 * @property int $status
 * @property string $created_at
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'name', 'description', 'ikey', 'amount', 'quantity', 'availability', 'product_condition', 'brand', 'stock', 'image', 'status'], 'required'],
            [['ikey', 'status'], 'integer'],
            [['created_at','user_email'], 'safe'],
            [['user_email', 'product_condition', 'brand', 'stock'], 'string', 'max' => 111],
            [['name', 'description', 'quantity', 'availability', 'image'], 'string', 'max' => 191],
            [['amount'], 'string', 'max' => 11],
            [['image'],'file','extensions'=>'jpg,png,gif','skipOnEmpty'=>false]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_email' => 'User Email',
            'name' => 'Name',
            'description' => 'Description',
            'ikey' => 'Ikey',
            'amount' => 'Amount',
            'quantity' => 'Quantity',
            'availability' => 'Availability',
            'product_condition' => 'Product Condition',
            'brand' => 'Brand',
            'stock' => 'Stock',
            'image' => 'Image',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
