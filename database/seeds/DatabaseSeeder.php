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
        echo "\r\n-Start seeding\r\n";


        $this->call(RoleTableSeeder::class);

        echo "\r\n-Roles sample created successfully\r\n";


        $this->call(PermissionTableSeeder::class);

        echo "\r\n-Permissions sample created successfully\r\n";


        $this->call(UserTableSeeder::class);

        echo "\r\n-Users sample created successfully\r\n";


        $this->call(ProjectTableSeeder::class);

        echo "\r\n-Projects sample created successfully\r\n";


        $this->call(TaskTableSeeder::class);

        echo "\r\n-Tasks sample created successfully\r\n";
    }
}
