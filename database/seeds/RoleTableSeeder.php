<?php

use Illuminate\Database\Seeder;
use App\Repositories\RoleRepository;
use App\Repositories\PermissionRepository;


class RoleTableSeeder extends Seeder
{

    public function addPermissionsToRole($role, $permissions)
    {
        foreach ($permissions as $permission) {
            $permission = PermissionRepository::where('slug', $permission)->first();
            $role->permissions()->attach($permission);
        }
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            echo "\r\n-" . " Attaching Permission in to the Role";

            // Root user
            $root_role = new RoleRepository();
            $root_role->slug = 'root';
            $root_role->name = 'Root';
            $root_role->save();

            // Give all permissions to Root User
            $permissions = PermissionRepository::pluck('slug')->toArray();

            $this->addPermissionsToRole($root_role, $permissions);

            //Admin
            $admin_role = new RoleRepository();
            $admin_role->slug = 'admin';
            $admin_role->name = 'Admin';
            $admin_role->save();

            // Give project permissions to Admin
            $permissions = [
                'create-projects',
                'read-projects',
                'update-projects',
                'delete-projects',
                'create-tasks',
                'read-tasks',
                'update-tasks',
                'delete-tasks'
            ];

            $this->addPermissionsToRole($root_role, $permissions);

            //User
            $user_role = new RoleRepository();
            $user_role->slug = 'user';
            $user_role->name = 'User';
            $user_role->save();

            // Give project permissions to User
            $permissions = [
                'create-projects',
                'read-projects',
                'update-projects',
                'delete-projects',
                'create-tasks',
                'read-tasks',
                'update-tasks',
                'delete-tasks'
            ];

            $this->addPermissionsToRole($root_role, $permissions);
        } catch (\Throwable $th) {
            throw $th;
        } finally {
            echo "\r\n-" . " Finished (Attaching Permission in to the Role)";
        }
    }
}
