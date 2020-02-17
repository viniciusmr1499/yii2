<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pessoas}}`.
 */
class m200217_174647_create_pessoas_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pessoas}}', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(),
            'idade' => $this->integer(),
            'peso' => $this->float(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pessoas}}');
    }
}
