<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = Role::create([
            'name' => 'admin',
            'title'=> 'مدیر',
            'editable'=> false
        ]) ;

        $admin->givePermissionTo([
            'audit-log index',
            'audit-log detail',
            'audit-log delete',
            'user index',
            'user detail',
            'user create',
            'user update',
            'user delete',
            'role index',
            'role detail',
            'role create',
            'role update',
            'role delete'
        ]);
        $admin->save();

    }
}
