<?php

use yii\db\Migration;

/**
 * Handles the creation of table `categories_products`.
 * Has foreign keys to the tables:
 *
 * - `categories`
 * - `products`
 */
class m170608_094407_create_junction_table_for_categories_and_products_tables extends Migration
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
        $this->createTable('{{%categories_products}}', [
            'categories_id' => $this->integer(),
            'products_id' => $this->integer(),
            'PRIMARY KEY(categories_id, products_id)',
        ], $tableOptions);

        // creates index for column `categories_id`
        $this->createIndex(
            'idx-categories_products-categories_id',
            'categories_products',
            'categories_id'
        );

        // add foreign key for table `categories`
        $this->addForeignKey(
            'fk-categories_products-categories_id',
            'categories_products',
            'categories_id',
            'categories',
            'id',
            'CASCADE'
        );

        // creates index for column `products_id`
        $this->createIndex(
            'idx-categories_products-products_id',
            'categories_products',
            'products_id'
        );

        // add foreign key for table `products`
        $this->addForeignKey(
            'fk-categories_products-products_id',
            'categories_products',
            'products_id',
            'products',
            'id',
            'CASCADE'
        );

        $this->insert('{{%categories_products}}', [
            'categories_id'=>1,
            'products_id'=>1
            ]);
        $this->insert('{{%categories_products}}', [
            'categories_id'=>3,
            'products_id'=>1
            ]);
        $this->insert('{{%categories_products}}', [
            'categories_id'=>15,
            'products_id'=>1
            ]);
        $this->insert('{{%categories_products}}', [
            'categories_id'=>1,
            'products_id'=>2
            ]);
        $this->insert('{{%categories_products}}', [
            'categories_id'=>2,
            'products_id'=>2
            ]);
        $this->insert('{{%categories_products}}', [
            'categories_id'=>16,
            'products_id'=>2
            ]);
        $this->insert('{{%categories_products}}', [
            'categories_id'=>1,
            'products_id'=>3
            ]);
        $this->insert('{{%categories_products}}', [
            'categories_id'=>4,
            'products_id'=>3
            ]);
            $this->insert('{{%categories_products}}', [
            'categories_id'=>17,
            'products_id'=>3
            ]);
        $this->insert('{{%categories_products}}', [
            'categories_id'=>1,
            'products_id'=>4
            ]);
        $this->insert('{{%categories_products}}', [
            'categories_id'=>5,
            'products_id'=>4
            ]);
        $this->insert('{{%categories_products}}', [
            'categories_id'=>17,
            'products_id'=>4
            ]);
        $this->insert('{{%categories_products}}', [
            'categories_id'=>1,
            'products_id'=>5
            ]);
        $this->insert('{{%categories_products}}', [
            'categories_id'=>17,
            'products_id'=>5
            ]);
        $this->insert('{{%categories_products}}', [
            'categories_id'=>20,
            'products_id'=>5
            ]);
        $this->insert('{{%categories_products}}', [
            'categories_id'=>10,
            'products_id'=>5
            ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `categories`
        $this->dropForeignKey(
            'fk-categories_products-categories_id',
            'categories_products'
        );

        // drops index for column `categories_id`
        $this->dropIndex(
            'idx-categories_products-categories_id',
            'categories_products'
        );

        // drops foreign key for table `products`
        $this->dropForeignKey(
            'fk-categories_products-products_id',
            'categories_products'
        );

        // drops index for column `products_id`
        $this->dropIndex(
            'idx-categories_products-products_id',
            'categories_products'
        );

        $this->dropTable('{{%categories_products}}');
    }
}
