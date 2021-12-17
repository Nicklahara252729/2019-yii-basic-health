<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pasien}}`.
 */
class m191205_054744_create_pasien_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pasien}}', [
            'id_pasien' => $this->primaryKey(),
            'nama_pasien' => $this->string(),
            'tgl_lahir' => $this->date(),
            'jenkel' => $this->string(10),
            'alamat'=> $this->string(),
            'notelp' => $this->string(15)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pasien}}');
    }
}
