<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeders = ['seed_categories_table','seed_todos_table'];
        foreach ($seeders as $seeder) {
          $this->call($seeder);
        }
    }
}
