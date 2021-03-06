<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ManufactureSeeder::class);
         $this->call(SiteSeeder::class);
//         $this->call(AttributeSeeder::class);
         $this->call(CategoriesSeeder::class);
    }
}
