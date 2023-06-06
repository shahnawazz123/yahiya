<?php
use yii\db\Migration;

class m200101_000000_create_users_table extends Migration
{
    public function up()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'password' => $this->string()->notNull(),
            'first_name' => $this->string(),
            'last_name' => $this->string(),
            // Add other user-related columns here
        ]);

        // Add any additional indexes or foreign keys here
    }

    public function down()
    {
        $this->dropTable('{{%users}}');
    }
}
