<?php
namespace App\Modules\BloodDoner\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\BloodDoner\Database\Seeder"
     */
    static $model = \App\Modules\BloodDoner\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        for ($i = 1; $i < 100; $i++) {
        self::$model::create([
            'name' => facker()->name,
            'phone' => facker()->name,
            'email' => facker()->name,
            'address' => facker()->name,
            'blood_group' => facker()->name,
            'division_id' => facker()->name,
            'district_id' => facker()->name,
            'thana_id' => facker()->name,
            'image' => facker()->name,
            ]);
        }
    }
}