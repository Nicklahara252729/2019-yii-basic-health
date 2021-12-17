<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rawat_inap}}`.
 */
class m191205_054854_create_rawat_inap_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%rawat_inap}}', [
            'id_rawat_inap' => $this->primaryKey(),
            'ruangan' => $this->string(50),
            'id_pasien' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%rawat_inap}}');
    }
}
