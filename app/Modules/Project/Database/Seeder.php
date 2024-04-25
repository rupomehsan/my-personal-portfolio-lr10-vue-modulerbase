<?php
namespace App\Modules\Project\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\Project\Database\Seeder"
     */
    static $model = \App\Modules\Project\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        for ($i = 1; $i < 100; $i++) {
        self::$model::create([
            'name' => facker()->name,
            'link' => facker()->name,
            'description' => facker()->name,
            'images' => facker()->name,
            ]);
        }
    }
}