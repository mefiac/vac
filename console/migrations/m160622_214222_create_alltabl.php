<?php

use yii\db\Migration;

/**
 * Handles the creation for table `alltabl`.
 */
class m160622_214222_create_alltabl extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()
        ]);
        $this->createIndex(
            'idx-category-id',
            'category',
            'id'
        );
        $this->createTable('book', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->defaultValue(1),
            'title' => $this->string(),
            'url' => $this->text(),
            'body' => $this->text(),
            'photo' => $this->string(),
        ]);
        $this->createIndex(
            'idx-book-book_id',
            'book',
            'id'
        );
        $this->addForeignKey(
            'fk-book-category_id',
            'book',
            'category_id',
            'category',
            'id',
            'NO ACTION'
        );


    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('book');
        $this->dropTable('category');
    }
}
