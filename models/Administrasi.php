<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "administrasi".
 *
 * @property int $id_administrasi
 * @property int $id_pasien
 * @property string $tanggal
 * @property string $total_keseluruhan
 */
class Administrasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'administrasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien'], 'integer'],
            [['tanggal'], 'safe'],
            [['total_keseluruhan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_administrasi' => 'Id Administrasi',
            'id_pasien' => 'Id Pasien',
            'tanggal' => 'Tanggal',
            'total_keseluruhan' => 'Total Keseluruhan',
        ];
    }
}
