<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dokter}}`.
 */
class m191205_054904_create_dokter_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dokter}}', [
            'id_dokter' => $this->primaryKey(),
            'nama_dokter' => $this->string(),
            'jenkel' => $this->string(10),
            'alamat' => $this->string(),
            'no_telp' => $this->string(20),
            'spesialis' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%dokter}}');
    }
}
