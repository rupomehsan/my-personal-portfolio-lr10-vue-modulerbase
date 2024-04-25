<?php
namespace App\Modules\ContactNumber\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\ContactNumber\Database\Seeder"
     */
    static $model = \App\Modules\ContactNumber\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        for ($i = 1; $i < 100; $i++) {
        self::$model::create([
            'name' => facker()->name,
            'phone' => facker()->name,
            'note' => facker()->name,
            'group_id' => facker()->name,
            ]);
        }
    }
}