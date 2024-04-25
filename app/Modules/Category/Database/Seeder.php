<?php

namespace App\Modules\Category\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\Category\Database\Seeder"
     */
    static $model = \App\Modules\Category\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        
        self::$model::create([
            "title" => "Islamic",
        ]);

        self::$model::create([
            "title" => "Quran",
            "parent_id" => 1,
        ]);

        self::$model::create([
            "title" => "Hadish",
            "parent_id" => 1,
        ]);

        self::$model::create([
            "title" => "Programing",
        ]);
        self::$model::create([
            "title" => "PHP",
            "parent_id" => 4,
        ]);
        self::$model::create([
            "title" => "Laravel",
            "parent_id" => 5,
        ]);
        self::$model::create([
            "title" => "Javascript",
            "parent_id" => 4,
        ]);
    }
}
