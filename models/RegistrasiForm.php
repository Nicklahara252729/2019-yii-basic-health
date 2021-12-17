<?php

namespace app\models;

use yii\base\Model;

class RegistrasiForm extends Model
{
    public $no_registrasi;
    public $id_pasien;
    public $tgl_registrasi; 

    public function attributeLabels()
    {
        return [
            'no_registrasi' => 'No Registrasi',
            'id_pasien' => 'Id Pasien',
            'tgl_registrasi' => 'Tgl Registrasi',
        ];
    }

    public function rules()
    {
        return [
            ['id_registrasi', 'required','message' => 'Nomor Registrasi tidak boleh kosong'],
            ['id_pasien', 'required','message'=>'Pasien tidak boleh kosong'],
            ['tgl_registrasi', 'required','message' => 'Tanggal registrasi tidak boleh kosong'],
        ];
    }
}