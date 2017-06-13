<?php

use yii\db\Migration;

class m170612_070936_add_column_manufacturer_id_products_table extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%products}}', 'manufacturer_id', $this->integer(11)->defaultValue(null)->null());
    }

    public function safeDown()
    {
      $this->dropColumn('{{%products}}', 'manufacturer_id');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170612_070936_add_column_manufacturer_id_products_table cannot be reverted.\n";

        return false;
    }
    */
}
