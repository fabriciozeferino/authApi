<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo "\r\n -Creating Permissions";

        $data = [
            [
                'slug' => 'create-users',
                'name' => 'create-users',
            ], [
                'slug' => 'read-users',
                'name' => 'read-users',
            ], [
                'slug' => 'update-users',
                'name' => 'update-users',
            ], [
                'slug' => 'delete-users',
                'name' => 'delete-users',
            ], [
                'slug' => 'create-roles',
                'name' => 'create-roles',
            ], [
                'slug' => 'read-roles',
                'name' => 'read-roles',
            ], [
                'slug' => 'update-roles',
                'name' => 'update-roles',
            ], [
                'slug' => 'delete-roles',
                'name' => 'delete-roles',
            ], [
                'slug' => 'create-permissions',
                'name' => 'create-permissions',
            ], [
                'slug' => 'read-permissions',
                'name' => 'read-permissions',
            ], [
                'slug' => 'update-permissions',
                'name' => 'update-permissions',
            ], [
                'slug' => 'delete-permissions',
                'name' => 'delete-permissions',
            ], [
                'slug' => 'create-projects',
                'name' => 'create-projects',
            ], [
                'slug' => 'read-projects',
                'name' => 'read-projects',
            ], [
                'slug' => 'update-projects',
                'name' => 'update-projects',
            ], [
                'slug' => 'delete-projects',
                'name' => 'delete-projects',
            ], [
                'slug' => 'create-tasks',
                'name' => 'create-tasks',
            ], [
                'slug' => 'read-tasks',
                'name' => 'read-tasks',
            ], [
                'slug' => 'update-tasks',
                'name' => 'update-tasks',
            ], [
                'slug' => 'delete-tasks',
                'name' => 'delete-tasks',
            ],
        ];

        echo "\r\n -Permissions(" . count($data) . ")";

        \DB::table('permissions')->insert($data);

        //Attaching permissions to Roles
        echo "\r\n Attaching permissions to Roles";

        $data = [
            //admin
            [
                'role_id' => 1,
                'permission_id' => 1,
            ], [
                'role_id' => 1,
                'permission_id' => 2,
            ], [
                'role_id' => 1,
                'permission_id' => 3,
            ], [
                'role_id' => 1,
                'permission_id' => 4,
            ], [
                'role_id' => 1,
                'permission_id' => 5,
            ], [
                'role_id' => 1,
                'permission_id' => 6,
            ], [
                'role_id' => 1,
                'permission_id' => 7,
            ], [
                'role_id' => 1,
                'permission_id' => 8,
            ], [
                'role_id' => 1,
                'permission_id' => 9,
            ], [
                'role_id' => 1,
                'permission_id' => 10,
            ], [
                'role_id' => 1,
                'permission_id' => 11,
            ], [
                'role_id' => 1,
                'permission_id' => 12,
            ], [
                'role_id' => 1,
                'permission_id' => 13,
            ], [
                'role_id' => 1,
                'permission_id' => 14,
            ], [
                'role_id' => 1,
                'permission_id' => 15,
            ], [
                'role_id' => 1,
                'permission_id' => 16,
            ], [
                'role_id' => 1,
                'permission_id' => 17,
            ], [
                'role_id' => 1,
                'permission_id' => 18,
            ], [
                'role_id' => 1,
                'permission_id' => 19,
            ], [
                'role_id' => 1,
                'permission_id' => 20,
            ],
            //user
            [
                'role_id' => 2,
                'permission_id' => 13,
            ], [
                'role_id' => 2,
                'permission_id' => 14,
            ], [
                'role_id' => 2,
                'permission_id' => 15,
            ], [
                'role_id' => 2,
                'permission_id' => 16,
            ], [
                'role_id' => 2,
                'permission_id' => 17,
            ], [
                'role_id' => 2,
                'permission_id' => 18,
            ], [
                'role_id' => 2,
                'permission_id' => 19,
            ], [
                'role_id' => 2,
                'permission_id' => 20,
            ],
        ];

        echo "\r\n-" . count($data) . " Permissions attached to Roles";

        \DB::table('permission_role')->insert($data);
    }
}
