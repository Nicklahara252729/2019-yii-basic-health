<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%obat}}`.
 */
class m191205_054911_create_obat_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%obat}}', [
            'id_obat' => $this->primaryKey(),
            'nama_obat' => $this->string(),
            'cara_pakai' => $this->string(),
            'harga_obat' => $this->string(),
            'jenis_obat' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%obat}}');
    }
}
