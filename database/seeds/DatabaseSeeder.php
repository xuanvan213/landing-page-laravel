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
        $this->call([
            MenuTableSeeder::class,
            ProjectsTableSeeder::class,
            AboutsTableSeeder::class,
            ApartmentsTableSeeder::class,
            ]);
        // $this->call(UserSeeder::class);
    }
}
