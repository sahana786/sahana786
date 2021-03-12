<?php
declare(strict_types=1);

use Cake\I18n\Time;
use Migrations\AbstractSeed;

/**
 * Categories seed.
 */
class CategoriesSeed extends AbstractSeed
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
                'parent_id' =>1,
                'lft' => 1,
                'rght' => 1,
                'name'=> 'PHP',
                'description' => 'php developer',
                'created' => (new Time())->format("Y-m-d H:i:s"),
                'modified' => (new Time())->format("Y-m-d H:i:s")

            ],
            [
                'id'=> 2,
                'parent_id' =>1,
                'lft' => 1,
                'rght' => 1,
                'name'=> 'Python',
                'description' => 'Python developer',
                'created' => (new Time())->format("Y-m-d H:i:s"),
                'modified' => (new Time())->format("Y-m-d H:i:s")

            ]
        ];

        $table = $this->table('categories');
        $table->truncate();
        $table->insert($data)->save();
    }
}
