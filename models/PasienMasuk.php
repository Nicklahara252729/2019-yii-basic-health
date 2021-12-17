<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasien_masuk".
 *
 * @property int $id_pasien_masuk
 * @property int $id_pasien
 * @property int $id_rawat_inap
 * @property string $no_registrasi
 * @property string $tgl_masuk
 */
class PasienMasuk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien_masuk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'id_rawat_inap'], 'integer'],
            [['tgl_masuk'], 'safe'],
            [['no_registrasi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien_masuk' => 'Id Pasien Masuk',
            'id_pasien' => 'Id Pasien',
            'id_rawat_inap' => 'Id Rawat Inap',
            'no_registrasi' => 'No Registrasi',
            'tgl_masuk' => 'Tgl Masuk',
        ];
    }
}
