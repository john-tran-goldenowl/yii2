<?php

use yii\db\cubrid\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%member}}`.
 */
class m221201_215749_create_member_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('member', [
            'id' => $this->primaryKey(),
            'name' => Schema::TYPE_INTEGER,
            'started_on' => $this->dateTime()->defaultValue(date('Y-m-d H:i:s'))
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%member}}');
    }

}
