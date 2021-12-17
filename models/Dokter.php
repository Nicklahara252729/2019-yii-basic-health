<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dokter".
 *
 * @property int $id_dokter
 * @property string $nama_dokter
 * @property string $jenkel
 * @property string $alamat
 * @property string $no_telp
 * @property string $spesialis
 */
class Dokter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dokter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_dokter', 'alamat', 'spesialis'], 'string', 'max' => 255],
            [['jenkel'], 'string', 'max' => 10],
            [['no_telp'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_dokter' => 'Id Dokter',
            'nama_dokter' => 'Nama Dokter',
            'jenkel' => 'Jenkel',
            'alamat' => 'Alamat',
            'no_telp' => 'No Telp',
            'spesialis' => 'Spesialis',
        ];
    }
}
