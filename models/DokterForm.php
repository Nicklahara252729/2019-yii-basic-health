<?php

namespace app\models;

use yii\base\Model;

class DokterForm extends Model
{
    public $nama_dokter;
    public $jenkel;
    public $alamat;
    public $no_telp;
    public $spesialis;

    public function attributeLabels()
    {
        return [
            'nama_dokter' => 'Nama dokter',
            'jenkel' => 'Jenis kelamin dokter',
            'alamat' => 'Alamat dokter',
            'no_telp' => 'Nomor telepon dokter',
            'spesialis' => 'Spesialis',
        ];
    }

    public function rules()
    {
        return [
            ['nama_dokter', 'required','message' => 'Nama dokter tidak boleh kosong'],
            ['jenkel', 'required','message'=>'Jenis kelamin tidak boleh kosong'],
            ['alamat', 'required','message' => 'Alamat tidak boleh kosong'],
            ['no_telp', 'required','message' => 'Nomor telepon tidak boleh kosong'],
            ['spesialis', 'required','message' => 'Spesialis tidak boleh kosong'],
        ];
    }
}