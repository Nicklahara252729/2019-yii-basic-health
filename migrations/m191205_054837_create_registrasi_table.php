<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%registrasi}}`.
 */
class m191205_054837_create_registrasi_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%registrasi}}', [
            'id_registrasi' => $this->primaryKey(),
            'no_registrasi' => $this->string(),
            'id_pasien' => $this->integer(),
            'tgl_registrasi' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%registrasi}}');
    }
}
