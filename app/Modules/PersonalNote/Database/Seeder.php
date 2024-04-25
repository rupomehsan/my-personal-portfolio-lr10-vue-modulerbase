<?php
namespace App\Modules\PersonalNote\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\PersonalNote\Database\Seeder"
     */
    static $model = \App\Modules\PersonalNote\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        for ($i = 1; $i < 100; $i++) {
        self::$model::create([
            'name' => facker()->name,
            'description' => facker()->name,
            'date' => facker()->name,
            ]);
        }
    }
}