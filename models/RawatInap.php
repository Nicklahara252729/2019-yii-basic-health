<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rawat_inap".
 *
 * @property int $id_rawat_inap
 * @property string $ruangan
 * @property int $id_pasien
 */
class RawatInap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rawat_inap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien'], 'integer'],
            [['ruangan'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_rawat_inap' => 'Id Rawat Inap',
            'ruangan' => 'Ruangan',
            'id_pasien' => 'Id Pasien',
        ];
    }
}
