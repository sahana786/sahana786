<?php
declare(strict_types=1);

use Cake\I18n\Time;
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id'=> 1,
                'email'=> 'admin@gmail.com',
                'password' => '123456',
                'role' => 'admin',
                'created' => (new Time())->format("Y-m-d H:i:s"),
                'modified' => (new Time())->format("Y-m-d H:i:s")
            ],
            [
                'id'=> 2,
                'email'=> 'author@gmail.com',
                'password' => '123456',
                'role' => 'author',
                'created' => (new Time())->format("Y-m-d H:i:s"),
                'modified' => (new Time())->format("Y-m-d H:i:s")
            ],
        ];

        $table = $this->table('users');
        $table->truncate();
        $table->insert($data)->save();
    }
}
