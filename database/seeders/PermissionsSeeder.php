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

        $data = $this->data();

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

    public function data()
    {
        return [
            [
                'title' => 'کاربران',
                'name' => 'user',
                'permissions' => [
                    ['name' => 'user create', 'title' => 'ساخت'],
                    ['name' => 'user update', 'title' => 'ویرایش'],
                    ['name' => 'user delete', 'title' => 'حذف'],
                    ['name' => 'user index', 'title' => 'لیست'],
                    ['name' => 'user detail', 'title' => 'جزئیات'],
                ],
            ],
            [
                'title' => 'نقش های کاربری',
                'name' => 'role',
                'permissions' => [
                    ['name' => 'role create', 'title' => 'ساخت'],
                    ['name' => 'role update', 'title' => 'ویرایش'],
                    ['name' => 'role delete', 'title' => 'حذف'],
                    ['name' => 'role index', 'title' => 'لیست'],
                    ['name' => 'role detail', 'title' => 'جزئیات'],
                ],
            ],
            [
                'title' => 'لاگ های حسابرسی',
                'name' => 'audit-log',
                'permissions' => [
                    ['name' => 'audit-log index', 'title' => 'لیست'],
                    ['name' => 'audit-log detail', 'title' => 'جزئیات'],
                    ['name' => 'audit-log delete', 'title' => 'حذف'],
                ],
            ]
        ];

    }
}
