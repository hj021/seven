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
        \App\User::truncate();
        \App\Slide::truncate();
        \App\Setting::truncate();
        \App\Payment::truncate();
        \App\Product::truncate();
        \App\Category::truncate();
         $this->call(UsersTableSeeder::class);
         $this->call(ProductsTableSeeder::class);
         $this->call(SlidesTablesSeeder::class);
         $this->call(SettingsTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
    }
}
