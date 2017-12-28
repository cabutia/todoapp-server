<?php

use App\Todo;
use Illuminate\Database\Seeder;

class seed_todos_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $todos = [
          [
            'category_id' => '1',
            'objId' => 'ITEM-'.uniqid(),
            'title' => 'Barra lateral de Unify con Mysql',
            'status' => '1',
            'description' => 'Crear las migraciones, modelos, etc, necesarios para poder gestionar la barra de navegacion lateral (sidebar) desde MySQL para Unify.'
          ],
          [
            'category_id' => '2',
            'objId' => 'ITEM-'.uniqid(),
            'title' => 'Crear el backend',
            'status' => '0',
            'description' => 'Desarrollar el backend (probablemente en Lumen) para la aplicacion de la lista de tareas.'
          ],
          [
            'category_id' => '2',
            'objId' => 'ITEM-'.uniqid(),
            'title' => 'Hacer la aplicacion de la lista de tareas',
            'status' => '-1',
            'description' => 'Realizar la aplicacion de la lista de tareas, en lo posible hoy (27/12/2017), para asi poder llevar un control.'
          ]
        ];

        foreach ($todos as $todo) {
          Todo::create($todo);
        }
    }
}
