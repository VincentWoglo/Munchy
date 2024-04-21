<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class RegisterUser extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up(): void
    {
        $table = $this->table('register_user', ['id' => false]);
        $table->addColumn('user_id', 'string', ['limit' => 100])
            ->addColumn('first_name', 'string', ['limit' => 100])
            ->addColumn('last_name', 'string', ['limit' => 100])
            ->addColumn('user_name', 'string', ['limit' => 50])
            ->addColumn('password', 'string', ['limit' => 50])
            ->addColumn('email', 'string', ['limit' => 250])
            ->addColumn('is_subscribed', 'boolean', ['limit' => 5])
            ->addColumn('created_at',  'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->create();
    }
}
