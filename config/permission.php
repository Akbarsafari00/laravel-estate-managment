<?php

return [

    'models' => [

        /*
         * When using the "HasPermissions" trait from this package, we need to know which
         * Eloquent model should be used to retrieve your permissions. Of course, it
         * is often just the "Permission.php" model but you may use whatever you like.
         *
         * The model you want to use as a Permission.php model needs to implement the
         * `Spatie\Permission.php\Contracts\Permission.php` contract.
         */

        'permission' => Spatie\Permission\Models\Permission::class,

        /*
         * When using the "HasRoles" trait from this package, we need to know which
         * Eloquent model should be used to retrieve your roles. Of course, it
         * is often just the "Role" model but you may use whatever you like.
         *
         * The model you want to use as a Role model needs to implement the
         * `Spatie\Permission.php\Contracts\Role` contract.
         */

        'role' => Spatie\Permission\Models\Role::class,

    ],

    'table_names' => [

        /*
         * When using the "HasRoles" trait from this package, we need to know which
         * table should be used to retrieve your roles. We have chosen a basic
         * default value but you may easily change it to any table you like.
         */

        'roles' => 'roles',

        /*
         * When using the "HasPermissions" trait from this package, we need to know which
         * table should be used to retrieve your permissions. We have chosen a basic
         * default value but you may easily change it to any table you like.
         */

        'permissions' => 'permissions',

        /*
         * When using the "HasPermissions" trait from this package, we need to know which
         * table should be used to retrieve your models permissions. We have chosen a
         * basic default value but you may easily change it to any table you like.
         */

        'model_has_permissions' => 'model_has_permissions',

        /*
         * When using the "HasRoles" trait from this package, we need to know which
         * table should be used to retrieve your models roles. We have chosen a
         * basic default value but you may easily change it to any table you like.
         */

        'model_has_roles' => 'model_has_roles',

        /*
         * When using the "HasRoles" trait from this package, we need to know which
         * table should be used to retrieve your roles permissions. We have chosen a
         * basic default value but you may easily change it to any table you like.
         */

        'role_has_permissions' => 'role_has_permissions',
    ],

    'column_names' => [

        /*
         * Change this if you want to name the related model primary key other than
         * `model_id`.
         *
         * For example, this would be nice if your primary keys are all UUIDs. In
         * that case, name this `model_uuid`.
         */

        'model_morph_key' => 'model_id',
    ],

    /*
     * When set to true, the required permission names are added to the exception
     * message. This could be considered an information leak in some contexts, so
     * the default setting is false here for optimum safety.
     */

    'display_permission_in_exception' => false,

    /*
     * When set to true, the required role names are added to the exception
     * message. This could be considered an information leak in some contexts, so
     * the default setting is false here for optimum safety.
     */

    'display_role_in_exception' => false,

    /*
     * By default wildcard permission lookups are disabled.
     */

    'enable_wildcard_permission' => true,

    'cache' => [

        /*
         * By default all permissions are cached for 24 hours to speed up performance.
         * When permissions or roles are updated the cache is flushed automatically.
         */

        'expiration_time' => \DateInterval::createFromDateString('24 hours'),

        /*
         * The cache key used to store all permissions.
         */

        'key' => 'spatie.permission.cache',

        /*
         * When checking for a permission against a model by passing a Permission.php
         * instance to the check, this key determines what attribute on the
         * Permissions model is used to cache against.
         *
         * Ideally, this should match your preferred way of checking permissions, eg:
         * `$user->can('view-posts')` would be 'name'.
         */

        'model_key' => 'name',

        /*
         * You may optionally indicate a specific cache driver to use for permission and
         * role caching using any of the `store` drivers listed in the cache.php config
         * file. Using 'default' here means to use the `default` set in cache.php.
         */

        'store' => 'default',
    ],
    'data' => [
        [
            'title' => 'حساب کاربری',
            'name' => 'account',
            'permissions' => [
                ['name' => 'account update', 'title' => 'ویرایش'],
                ['name' => 'account delete', 'title' => 'حذف'],
                ['name' => 'account detail', 'title' => 'جزئیات'],
                ['name' => 'account change-password', 'title' => 'تغیر کلمه عبور'],
                ['name' => 'account change-email', 'title' => 'تغیر ایمیل'],
            ],
        ],
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
            'title' => 'نوع ملک',
            'name' => 'estate-type',
            'permissions' => [
                ['name' => 'estate-type create', 'title' => 'ساخت'],
                ['name' => 'estate-type update', 'title' => 'ویرایش'],
                ['name' => 'estate-type delete', 'title' => 'حذف'],
                ['name' => 'estate-type index', 'title' => 'لیست'],
                ['name' => 'estate-type detail', 'title' => 'جزئیات'],
            ],
        ],
        [
            'title' => 'نوع سند ملک',
            'name' => 'estate-document-type',
            'permissions' => [
                ['name' => 'estate-document-type create', 'title' => 'ساخت'],
                ['name' => 'estate-document-type update', 'title' => 'ویرایش'],
                ['name' => 'estate-document-type delete', 'title' => 'حذف'],
                ['name' => 'estate-document-type index', 'title' => 'لیست'],
                ['name' => 'estate-document-type detail', 'title' => 'جزئیات'],
            ],
        ],
        [
            'title' => 'امکانات ملک',
            'name' => 'estate-feature',
            'permissions' => [
                ['name' => 'estate-feature create', 'title' => 'ساخت'],
                ['name' => 'estate-feature update', 'title' => 'ویرایش'],
                ['name' => 'estate-feature delete', 'title' => 'حذف'],
                ['name' => 'estate-feature index', 'title' => 'لیست'],
                ['name' => 'estate-feature detail', 'title' => 'جزئیات'],
            ],
        ],
        [
            'title' => 'اشتراکات ملک',
            'name' => 'estate-subscription',
            'permissions' => [
                ['name' => 'estate-subscription create', 'title' => 'ساخت'],
                ['name' => 'estate-subscription update', 'title' => 'ویرایش'],
                ['name' => 'estate-subscription delete', 'title' => 'حذف'],
                ['name' => 'estate-subscription index', 'title' => 'لیست'],
                ['name' => 'estate-subscription detail', 'title' => 'جزئیات'],
            ],
        ],
        [
            'title' => 'ملک',
            'name' => 'estate',
            'permissions' => [
                ['name' => 'estate create', 'title' => 'ساخت'],
                ['name' => 'estate update', 'title' => 'ویرایش'],
                ['name' => 'estate delete', 'title' => 'حذف'],
                ['name' => 'estate index', 'title' => 'لیست'],
                ['name' => 'estate detail', 'title' => 'جزئیات'],
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
        ],
        [
            'title' => 'لاگ های سیستم',
            'name' => 'system-log',
            'permissions' => [
                ['name' => 'system-log index', 'title' => 'لیست'],
                ['name' => 'system-log detail', 'title' => 'جزئیات'],
                ['name' => 'system-log delete', 'title' => 'حذف'],
            ],
        ]
    ]
];
