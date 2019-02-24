<?php

use Illuminate\Database\Seeder;
use App\Repositories\TaskRepository;


class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TaskRepository::class, 35000)->create();
    }
}
