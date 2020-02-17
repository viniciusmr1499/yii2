<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%courses}}`.
 */
class m200217_142227_create_courses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%courses}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'hours' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%courses}}');
    }
}
