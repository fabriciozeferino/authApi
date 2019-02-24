<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo "\r\n -Adding Roles and Permissions to users";


        /* Root User */
        $root = new App\User();
        $root->name = 'root';
        $root->remember_token = str_random(10);
        $root->email = 'root@root.com';
        $root->password = bcrypt('secret');
        $root->save();
        $root->roles()->attach(
            App\Repositories\RoleRepository::all()->pluck('id')->toArray()
        );
        $root->permissions()->attach(
            App\Repositories\PermissionRepository::all()->pluck('id')->toArray()
        );


        /* Admin User */
        $admin = new App\User();
        $admin->name = 'admin';
        $admin->email = 'admin@admin.com';
        $admin->remember_token = str_random(10);
        $admin->password = bcrypt('secret');
        $admin->save();
        $admin->roles()->attach(
            App\Repositories\RoleRepository::where('id', 2)->pluck('id')->toArray()
        );
        $admin->permissions()->attach(
            App\Repositories\PermissionRepository::where('id', '>=', 6)->pluck('id')->toArray()
        );


        /* Creating Users */
        factory(App\User::class, 500)->create();

        $roles = App\Repositories\RoleRepository::where('id', 3);
        $permissions = App\Repositories\PermissionRepository::all();

        App\User::where('id', '>', 2)->get()->each(function ($user) use ($roles, $permissions) {
            dump($user->id);

            //dd($permissions->where('id', 13)->pluck('id')->toArray());

            $user->roles()->attach(
                $roles->where('id', 3)->pluck('id')->toArray()
            );

            $user->permissions()->attach(
                $permissions->where('id', 13)
            );

            $user->permissions()->attach(
                $permissions->where('id', 14)
            );

            $user->permissions()->attach(
                $permissions->where('id', 15)
            );

            $user->permissions()->attach(
                $permissions->where('id', 16)
            );

            $user->permissions()->attach(
                $permissions->where('id', 17)
            );

            $user->permissions()->attach(
                $permissions->where('id', 18)
            );

            $user->permissions()->attach(
                $permissions->where('id', 19)
            );

            $user->permissions()->attach(
                $permissions->where('id', 20)
            );
        });
    }
}
