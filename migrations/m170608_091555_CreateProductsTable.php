<?php

use yii\db\Migration;

class m170608_091555_CreateProductsTable extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%products}}', [
            'id'            =>  $this->primaryKey(),
            'name'          =>  $this->string(255)->unique()->notNull(),
            'description'   =>  $this->text(),
            'price'         =>  $this->decimal(10,2)->notNull()->defaultValue(0,00),
            'image'         =>  $this->string(),
            'status'        =>  $this->integer(2)->defaultValue(1),
            'title'         =>  $this->string(70),
            'seodescription'=>  $this->string(300),
            'keywords'      => $this->string(),
            'update_at'     =>  $this->timestamp()->null(),
            'create_at'     =>  $this->timestamp()->null(),
        ], $tableOptions);

        $this->createIndex('idx_products_name', '{{%products}}', 'name');
        $this->createIndex('idx_products_price', '{{%products}}', 'price');

        $this->insert('{{%products}}',[
            'name'          =>'Easy Polo Black Edition',
            'description'  =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'price'=>'59'
            ]);
        $this->insert('{{%products}}',[
            'name'          =>'Easy Polo Black Edition2',
            'description'  =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'price'=>'56'
            ]);
        $this->insert('{{%products}}',[
            'name'          =>'Easy Polo Black Edition3',
            'description'  =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'price'=>'100'
            ]);
        $this->insert('{{%products}}',[
            'name'          =>'Easy Polo Black Edition4',
            'description'  =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'price'=>'70'
            ]);
        $this->insert('{{%products}}',[
            'name'          =>'Easy Polo Black Edition5',
            'description'  =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'price'=>'9'
            ]);
    }

    public function safeDown()
    {
        $this->dropIndex('idx_products_price', '{{%products}}');
        $this->dropIndex('idx_products_name', '{{%products}}');

        $this->dropTable('{{%products}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170608_091555_CreateProductsTable cannot be reverted.\n";

        return false;
    }
    */
}
