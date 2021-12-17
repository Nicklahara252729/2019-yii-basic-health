<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%administrasi_detail}}`.
 */
class m191205_054946_create_administrasi_detail_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%administrasi_detail}}', [
            'id_administrasi_detail' => $this->primaryKey(),
            'id_administrasi' => $this->integer(),
            'item' => $this->string(),
            'jumlah' => $this->integer(),
            'harga'=> $this->integer(),
            'total' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%administrasi_detail}}');
    }
}
