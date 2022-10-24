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

        $data = config('role.data');

        foreach ($data as $item ){
            $role = Role::create([
                'name' => $item['name'],
                'title'=> $item['title'],
                'editable'=> $item['editable']
            ]) ;

            $role->givePermissionTo($item['permissions']);
            $role->save();
        }
    }
}
