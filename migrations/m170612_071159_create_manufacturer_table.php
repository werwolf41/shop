<?php

use yii\db\Migration;

/**
 * Handles the creation of table `manufacturer`.
 */
class m170612_071159_create_manufacturer_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%manufacturer}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(500),
        ], $tableOptions);

        $this->addForeignKey('fk_products_manufacturer_id_manufacturer_id', '{{%products}}', 'manufacturer_id', '{{%manufacturer}}', 'id', 'SET NULL');

        $this->insert('{{%manufacturer}}',[
            'name'=>'apple'
        ]);
        $this->insert('{{%manufacturer}}',[
            'name'=>'Canon'
        ]);

        $this->update('{{%products}}', ['manufacturer_id'=>1], ['id'=>1]);
        $this->update('{{%products}}', ['manufacturer_id'=>1], ['id'=>2]);
        $this->update('{{%products}}', ['manufacturer_id'=>2], ['id'=>3]);
        $this->update('{{%products}}', ['manufacturer_id'=>2], ['id'=>4]);
        $this->update('{{%products}}', ['manufacturer_id'=>2], ['id'=>5]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('fk_products_manufacturer_id_manufacturer_id', '{{%products}}');
        $this->dropTable('{{%manufacturer}}');
    }
}
