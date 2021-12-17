<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasien_keluar".
 *
 * @property int $id_pasien_keluar
 * @property int $id_pasien
 * @property int $id_rawat_inap
 * @property string $no_registrasi
 * @property string $tgl_keluar
 */
class PasienKeluar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien_keluar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'id_rawat_inap'], 'integer'],
            [['tgl_keluar'], 'safe'],
            [['no_registrasi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien_keluar' => 'Id Pasien Keluar',
            'id_pasien' => 'Id Pasien',
            'id_rawat_inap' => 'Id Rawat Inap',
            'no_registrasi' => 'No Registrasi',
            'tgl_keluar' => 'Tgl Keluar',
        ];
    }
}
