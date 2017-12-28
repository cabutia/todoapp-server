<?php

use App\Category;
use Illuminate\Database\Seeder;

class seed_categories_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
          [
            'title' => 'Ceres Solutions',
            'style' => '{"border-color":"hsla(340, 100%, 50%, 0.8)"}'
          ],
          [
            'title' => 'Desarrollo',
            'style' => '{"border-color":"hsla(190, 100%, 50%, 0.8)"}'
          ]
        ];
        foreach ($categories as $category) {
          Category::create($category);
        }
    }
}
