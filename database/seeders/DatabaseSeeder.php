<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Type;
use App\Models\TypeYear;
use App\Models\Year;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Brand::factory(10)->create();
        Type::factory(30)->create();
        Year::factory(10)->create();
        TypeYear::factory(50)->create();
    }
}
