<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "administrasi_detail".
 *
 * @property int $id_administrasi_detail
 * @property int $id_administrasi
 * @property string $item
 * @property int $jumlah
 * @property int $harga
 * @property int $total
 */
class AdministrasiDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'administrasi_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_administrasi', 'jumlah', 'harga', 'total'], 'integer'],
            [['item'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_administrasi_detail' => 'Id Administrasi Detail',
            'id_administrasi' => 'Id Administrasi',
            'item' => 'Item',
            'jumlah' => 'Jumlah',
            'harga' => 'Harga',
            'total' => 'Total',
        ];
    }
}
