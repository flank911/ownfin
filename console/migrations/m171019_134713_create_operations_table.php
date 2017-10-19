<?php

use yii\db\Migration;

/**
 * Handles the creation of table `operations`.
 */
class m171019_134713_create_operations_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('operations', [
            'id' => $this->primaryKey(),
	    'uid' => $this->integer(),
	    'date' => $this->date(),
	    'summ' => $this->float(),
	    'cat_id' => $this->integer(),
	    'comment' => $this->text(255),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('operations');
    }
}
