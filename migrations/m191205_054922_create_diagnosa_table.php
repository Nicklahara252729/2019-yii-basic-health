<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%diagnosa}}`.
 */
class m191205_054922_create_diagnosa_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%diagnosa}}', [
            'id_diagnosa' => $this->primaryKey(),
            'id_pasien' => $this->integer(),
            'id_dokter' => $this->integer(),
            'keluhan' => $this->text(),
            'nama_penyakit' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%diagnosa}}');
    }
}
