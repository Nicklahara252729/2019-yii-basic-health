<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registrasi".
 *
 * @property int $id_registrasi
 * @property string $no_registrasi
 * @property int $id_pasien
 * @property string $tgl_registrasi
 */
class Registrasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'registrasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien'], 'integer'],
            [['tgl_registrasi'], 'safe'],
            [['no_registrasi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_registrasi' => 'Id Registrasi',
            'no_registrasi' => 'No Registrasi',
            'id_pasien' => 'Id Pasien',
            'tgl_registrasi' => 'Tgl Registrasi',
        ];
    }
}
