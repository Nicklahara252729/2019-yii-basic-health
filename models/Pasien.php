<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property int $id_pasien
 * @property string $nama_pasien
 * @property string $tgl_lahir
 * @property string $jenkel
 * @property string $alamat
 * @property string $notelp
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_lahir'], 'safe'],
            [['nama_pasien', 'alamat'], 'string', 'max' => 255],
            [['jenkel'], 'string', 'max' => 10],
            [['notelp'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'nama_pasien' => 'Nama Pasien',
            'tgl_lahir' => 'Tgl Lahir',
            'jenkel' => 'Jenkel',
            'alamat' => 'Alamat',
            'notelp' => 'Notelp',
        ];
    }
}
