<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pasien_masuk}}`.
 */
class m191205_054811_create_pasien_masuk_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pasien_masuk}}', [
            'id_pasien_masuk' => $this->primaryKey(),
            'id_pasien' => $this->integer(),
            'id_rawat_inap' => $this->integer(),
            'no_registrasi' => $this->string(),
            'tgl_masuk' => $this->dateTime()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pasien_masuk}}');
    }
}
