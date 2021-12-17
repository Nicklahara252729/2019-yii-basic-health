<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pasien_keluar}}`.
 */
class m191205_054826_create_pasien_keluar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pasien_keluar}}', [
            'id_pasien_keluar' => $this->primaryKey(),
            'id_pasien' => $this->integer(),
            'id_rawat_inap' => $this->integer(),
            'no_registrasi' => $this->string(),
            'tgl_keluar' => $this->dateTime()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pasien_keluar}}');
    }
}
