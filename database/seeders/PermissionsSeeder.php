<?php

namespace Database\Seeders;

use App\Models\PermissionsCategories;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $data = config('permission.data');;

        foreach ($data as $cat) {

            $category = PermissionsCategories::create([
                'name'=>$cat['name'],
                'title'=>$cat['title'],
            ]);

            foreach ($cat['permissions'] as $per) {
                Permission::create([
                    'name' => $per['name'],
                    'title' => $per['title'],
                    'category_id' => $category->id
                ]);
            }

        }
    }


}
