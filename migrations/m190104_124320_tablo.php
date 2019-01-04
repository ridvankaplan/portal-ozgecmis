<?php

use yii\db\Migration;

/**
 * Class m190104_124320_tablo
 */
class m190104_124320_tablo extends Migration
{

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
       if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $TABLE_NAME = 'kullanici';
        $this->createTable($TABLE_NAME, [
            'id' => $this->primaryKey(),
            'isim' => $this->string(128)->notNull(),
            'soyisim' => $this->string(128)->notNull(),
            'ozet' => $this->string(10000)->notNull(),
            'tel' => $this->integer()->notNull(),
            'email' => $this->string(128)->notNull(),
            'website' => $this->string(128)->notNull(),
            'lokasyon' => $this->string(128)->notNull(),
            'lise' => $this->string(128)->notNull(),
            'universite' => $this->string(128)->notNull(),
            'yetenek' => $this->string(128)->notNull(),
            'dil' => $this->string(128)->notNull(),
            'sertifika' => $this->string(128)->notNull(),
            'bolum' => $this->string(128)->notNull()
        ], $tableOptions);
    }


    public function down()
    {
        $TABLE_NAME = 'kullanici';
        $this->dropTable($TABLE_NAME);

    }

}
