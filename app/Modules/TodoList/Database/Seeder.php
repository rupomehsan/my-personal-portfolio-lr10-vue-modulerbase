<?php
namespace App\Modules\TodoList\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\TodoList\Database\Seeder"
     */
    static $model = \App\Modules\TodoList\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        for ($i = 1; $i < 100; $i++) {
        self::$model::create([
            'title' => facker()->name,
            'description' => facker()->name,
            'category_id' => facker()->name,
            ]);
        }
    }
}