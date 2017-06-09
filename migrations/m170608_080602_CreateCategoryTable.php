<?php

use yii\db\Migration;

class m170608_080602_CreateCategoryTable extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%categories}}', [
            'id'            => $this->primaryKey(),
            'parent_id'     => $this->integer(11),
            'name'          => $this->string(255)->notNull()->unique(),
            'description'   => $this->text(),
            'image'         => $this->string(),
            'title'         => $this->string(70),
            'seoDescription'=> $this->string(300),
            'keywords'      => $this->string(),
            'update_at'     => $this->timestamp()->defaultValue(null),
            'create_at'     => $this->timestamp()->defaultValue(null),
        ], $tableOptions);

        $this->createIndex('idx_categories_parent_id', '{{%categories}}', 'parent_id');

        $this->addForeignKey('fk_categories_parent_id_categories_id', '{{%categories}}', 'parent_id', '{{%categories}}',
            'id', 'SET NULL');

        $this->createIndex('idx_categories_name', '{{%categories}}', 'name');

        $this->insert('{{%categories}}', [
            'id' => 1,
            'name' => 'SPORTSWEAR',
        ]);
        $this->insert('{{%categories}}', [
            'id' => 2,
            'parent_id' => 1,
            'name' => 'NIKE',
        ]);
        $this->insert('{{%categories}}', [
            'id' => 3,
            'parent_id' => 1,
            'name' => 'UNDER ARMOUR',
        ]);
        $this->insert('{{%categories}}', [
            'id' => 4,
            'parent_id' => 1,
            'name' => 'ADIDAS',
        ]);
        $this->insert('{{%categories}}', [
            'id' => 5,
            'parent_id' => 1,
            'name' => 'PUMA',
        ]);
        $this->insert('{{%categories}}', [
            'id' => 6,
            'parent_id' => 1,
            'name' => 'ASICS',
        ]);

        $this->insert('{{%categories}}', [
            'id' => 7,
            'name' => 'MENS',
        ]);
        $this->insert('{{%categories}}', [
            'id' => 8,
            'parent_id' => 7,
            'name' => 'FENDI',
        ]);
        $this->insert('{{%categories}}', [
            'id' => 9,
            'parent_id' => 7,
            'name' => 'GUESS',
        ]);
        $this->insert('{{%categories}}', [
            'id' => 10,
            'parent_id' => 7,
            'name' => 'VALENTINO',
        ]);
        $this->insert('{{%categories}}', [
            'id' => 11,
            'parent_id' => 7,
            'name' => 'DIOR',
        ]);
        $this->insert('{{%categories}}', [
            'id' => 12,
            'parent_id' => 7,
            'name' => 'VERSACE',
        ]);
        $this->insert('{{%categories}}', [
            'id' => 13,
            'parent_id' => 7,
            'name' => 'ARMANI',
        ]);
        $this->insert('{{%categories}}', [
            'id' => 14,
            'parent_id' => 7,
            'name' => 'PRADA',
        ]);
        $this->insert('{{%categories}}', [
            'id' => 15,
            'parent_id' => 7,
            'name' => 'DOLCE AND GABBANA',
        ]);
        $this->insert('{{%categories}}', [
            'id' => 16,
            'parent_id' => 7,
            'name' => 'CHANEL',
        ]);
        $this->insert('{{%categories}}', [
            'id' => 17,
            'parent_id' => 7,
            'name' => 'GUCCI',
        ]);
        $this->insert('{{%categories}}', [
            'name' => 'KIDS',
        ]);
        $this->insert('{{%categories}}', [
            'name' => 'FASHION',
        ]);
        $this->insert('{{%categories}}', [
            'name' => 'HOUSEHOLDS',
        ]);
        $this->insert('{{%categories}}', [
            'name' => 'INTERIORS',
        ]);
        $this->insert('{{%categories}}', [
            'name' => 'CLOTHING',
        ]);
        $this->insert('{{%categories}}', [
            'name' => 'BAGS',
        ]);
//        $this->insert('{{%categories}}', [
//            'name' => 'SHOES',
//        ]);

    }

    public function safeDown()
    {
        $this->dropIndex('idx_categories_name', '{{%categories}}');

        $this->dropForeignKey('fk_categories_parent_id_categories_id', '{{%categories}}');
        $this->dropIndex('idx_categories_parent_id', '{{%categories}}');

        $this->dropTable('{{%categories}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170608_080602_CreateCategoryTable cannot be reverted.\n";

        return false;
    }
    */
}
