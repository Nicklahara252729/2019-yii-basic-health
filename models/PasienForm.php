<?php

namespace app\models;

use yii\base\Model;

class PasienForm extends Model
{
    public $nama_pasien;
    public $tgl_lahir;
    public $jenkel;
    public $alamat;
    public $notelp;

    public function attributeLabels()
    {
        return [
            'nama_pasien' => 'Nama pasien',
            'tgl_lahir' => 'Tanggal lahir',
            'jenkel' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'notelp' => 'Nomor telepon',
        ];
    }

    public function rules()
    {
        return [
            ['nama_pasien', 'required','message' => 'Nama pasien tidak boleh kosong'],
            ['tgl_lahir', 'required','message'=>'Tanggal lahir tidak boleh kosong'],
            ['jenkel', 'required','message' => 'Jenis kelamin tidak boleh kosong'],
            ['alamat', 'required','message' => 'Alamat tidak boleh kosong'],
            ['notelp', 'required','message' => 'Nomor telepon tidak boleh kosong'],
        ];
    }
}