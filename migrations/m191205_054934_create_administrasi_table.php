<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%administrasi}}`.
 */
class m191205_054934_create_administrasi_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%administrasi}}', [
            'id_administrasi' => $this->primaryKey(),
            'id_pasien' => $this->integer(),
            'tanggal' => $this->date(),
            'total_keseluruhan' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%administrasi}}');
    }
}
