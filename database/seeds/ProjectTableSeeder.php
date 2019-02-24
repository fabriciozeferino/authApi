<?php

use Illuminate\Database\Seeder;
use App\Repositories\ProjectRepository;


class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ProjectRepository::class, 5000)->create();
    }
}
