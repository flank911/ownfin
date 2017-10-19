<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m171019_140904_create_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(11),
            'title' => $this->string(15),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('category');
    }
}
