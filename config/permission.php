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
            'title' => '???????? ????????????',
            'name' => 'account',
            'permissions' => [
                ['name' => 'account update', 'title' => '????????????'],
                ['name' => 'account delete', 'title' => '??????'],
                ['name' => 'account detail', 'title' => '????????????'],
                ['name' => 'account change-password', 'title' => '???????? ???????? ????????'],
                ['name' => 'account change-email', 'title' => '???????? ??????????'],
            ],
        ],
        [
            'title' => '??????????????',
            'name' => 'user',
            'permissions' => [
                ['name' => 'user create', 'title' => '????????'],
                ['name' => 'user update', 'title' => '????????????'],
                ['name' => 'user delete', 'title' => '??????'],
                ['name' => 'user index', 'title' => '????????'],
                ['name' => 'user detail', 'title' => '????????????'],
            ],
        ],
        [
            'title' => '?????? ?????? ????????????',
            'name' => 'role',
            'permissions' => [
                ['name' => 'role create', 'title' => '????????'],
                ['name' => 'role update', 'title' => '????????????'],
                ['name' => 'role delete', 'title' => '??????'],
                ['name' => 'role index', 'title' => '????????'],
                ['name' => 'role detail', 'title' => '????????????'],
            ],
        ],
        [
            'title' => '?????? ??????',
            'name' => 'estate-type',
            'permissions' => [
                ['name' => 'estate-type create', 'title' => '????????'],
                ['name' => 'estate-type update', 'title' => '????????????'],
                ['name' => 'estate-type delete', 'title' => '??????'],
                ['name' => 'estate-type index', 'title' => '????????'],
                ['name' => 'estate-type detail', 'title' => '????????????'],
            ],
        ],
        [
            'title' => '?????? ?????? ??????',
            'name' => 'estate-document-type',
            'permissions' => [
                ['name' => 'estate-document-type create', 'title' => '????????'],
                ['name' => 'estate-document-type update', 'title' => '????????????'],
                ['name' => 'estate-document-type delete', 'title' => '??????'],
                ['name' => 'estate-document-type index', 'title' => '????????'],
                ['name' => 'estate-document-type detail', 'title' => '????????????'],
            ],
        ],
        [
            'title' => '?????????????? ??????',
            'name' => 'estate-feature',
            'permissions' => [
                ['name' => 'estate-feature create', 'title' => '????????'],
                ['name' => 'estate-feature update', 'title' => '????????????'],
                ['name' => 'estate-feature delete', 'title' => '??????'],
                ['name' => 'estate-feature index', 'title' => '????????'],
                ['name' => 'estate-feature detail', 'title' => '????????????'],
            ],
        ],
        [
            'title' => '???????????????? ??????',
            'name' => 'estate-subscription',
            'permissions' => [
                ['name' => 'estate-subscription create', 'title' => '????????'],
                ['name' => 'estate-subscription update', 'title' => '????????????'],
                ['name' => 'estate-subscription delete', 'title' => '??????'],
                ['name' => 'estate-subscription index', 'title' => '????????'],
                ['name' => 'estate-subscription detail', 'title' => '????????????'],
            ],
        ],
        [
            'title' => '??????',
            'name' => 'estate',
            'permissions' => [
                ['name' => 'estate create', 'title' => '????????'],
                ['name' => 'estate update', 'title' => '????????????'],
                ['name' => 'estate delete', 'title' => '??????'],
                ['name' => 'estate index', 'title' => '????????'],
                ['name' => 'estate detail', 'title' => '????????????'],
            ],
        ],
        [
            'title' => '?????? ?????? ??????????????',
            'name' => 'audit-log',
            'permissions' => [
                ['name' => 'audit-log index', 'title' => '????????'],
                ['name' => 'audit-log detail', 'title' => '????????????'],
                ['name' => 'audit-log delete', 'title' => '??????'],
            ],
        ],
        [
            'title' => '?????? ?????? ??????????',
            'name' => 'system-log',
            'permissions' => [
                ['name' => 'system-log index', 'title' => '????????'],
                ['name' => 'system-log detail', 'title' => '????????????'],
                ['name' => 'system-log delete', 'title' => '??????'],
            ],
        ]
    ]
];
