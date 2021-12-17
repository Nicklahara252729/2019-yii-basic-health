<?php

namespace app\models;

use yii\base\Model;

class ObatForm extends Model
{
    public $nama_obat;
    public $cara_pakai;
    public $harga_obat;
    public $jenis_obat;

    public function attributeLabels()
    {
        return [
            'nama_obat' => 'Nama obat',
            'cara_pakai' => 'Cara pemakaian obat',
            'harga_obat' => 'Harga obat',
            'jenis_obat' => 'Jenis obat',
        ];
    }

    public function rules()
    {
        return [
            ['nama_obat', 'required','message' => 'Nama obat tidak boleh kosong'],
            ['cara_pakai', 'required','message'=>'Cara pemakaian tidak boleh kosong'],
            ['harga_obat', 'required','message' => 'Harga obat tidak boleh kosong'],
            ['jenis_obat', 'required','message' => 'Jenis obat tidak boleh kosong'],
        ];
    }
}