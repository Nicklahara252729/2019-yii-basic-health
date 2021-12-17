<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pemeriksaan".
 *
 * @property int $id_diagnosa
 * @property int $id_pasien
 * @property int $id_dokter
 * @property string $keluhan
 * @property string $nama_penyakit
 * @property string $no_registrasi
 * @property string $status
 * @property string $rawat_inap
 * @property string $tgl_pemeriksaan
 */
class Pemeriksaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemeriksaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'id_dokter'], 'integer'],
            [['keluhan', 'status', 'rawat_inap'], 'string'],
            [['no_registrasi', 'status', 'rawat_inap', 'tgl_pemeriksaan'], 'required'],
            [['tgl_pemeriksaan'], 'safe'],
            [['nama_penyakit'], 'string', 'max' => 255],
            [['no_registrasi'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_diagnosa' => 'Id Diagnosa',
            'id_pasien' => 'Id Pasien',
            'id_dokter' => 'Id Dokter',
            'keluhan' => 'Keluhan',
            'nama_penyakit' => 'Nama Penyakit',
            'no_registrasi' => 'No Registrasi',
            'status' => 'Status',
            'rawat_inap' => 'Rawat Inap',
            'tgl_pemeriksaan' => 'Tgl Pemeriksaan',
        ];
    }
}
