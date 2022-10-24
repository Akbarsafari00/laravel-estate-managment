<?php
return array(
    '' => array(
        'title' => 'Dashboard',
        'description' => '',
        'view' => 'index',
        'layout' => array(
            'page-title' => array(
                'description' => true,
                'breadcrumb' => false,
            ),
        ),
        'assets' => array(
            'custom' => array(
                'js' => array(),
            ),
        ),
    ),

    'login' => array(
        'title' => 'Login',
        'assets' => array(
            'custom' => array(
                'js' => array(
                    'js/custom/authentication/sign-in/general.js',
                ),
            ),
        ),
        'layout' => array(
            'main' => array(
                'type' => 'blank', // Set blank layout
                'body' => array(
                    'class' => theme()->isDarkMode() ? '' : 'bg-body',
                ),
            ),
        ),
    ),
    'register' => array(
        'title' => 'Register',
        'assets' => array(
            'custom' => array(
                'js' => array(
                    'js/custom/authentication/sign-up/general.js',
                ),
            ),
        ),
        'layout' => array(
            'main' => array(
                'type' => 'blank', // Set blank layout
                'body' => array(
                    'class' => theme()->isDarkMode() ? '' : 'bg-body',
                ),
            ),
        ),
    ),
    'forgot-password' => array(
        'title' => 'Forgot Password',
        'assets' => array(
            'custom' => array(
                'js' => array(
                    'js/custom/authentication/password-reset/password-reset.js',
                ),
            ),
        ),
        'layout' => array(
            'main' => array(
                'type' => 'blank', // Set blank layout
                'body' => array(
                    'class' => theme()->isDarkMode() ? '' : 'bg-body',
                ),
            ),
        ),
    ),

    'log' => array(
        'audit' => array(
            'title' => 'Audit Log',
            'assets' => array(
                'custom' => array(
                    'css' => array(
                        'plugins/custom/datatables/datatables.bundle.css',
                    ),
                    'js' => array(
                        'plugins/custom/datatables/datatables.bundle.js',
                    ),
                ),
            ),
        ),
        'system' => array(
            'title' => 'System Log',
            'assets' => array(
                'custom' => array(
                    'css' => array(
                        'plugins/custom/datatables/datatables.bundle.css',
                    ),
                    'js' => array(
                        'plugins/custom/datatables/datatables.bundle.js',
                    ),
                ),
            ),
        ),
    ),
    'users' => array(
        'title' => 'لیست کاربران',
        'assets' => array(
            'custom' => array(
                'css' => array(
                    'plugins/custom/datatables/datatables.bundle.css',
                ),
                'js' => array(
                    'plugins/custom/datatables/datatables.bundle.js',
                ),
            ),
        ),
        'edit' => array(
           '*'=>array(
               'title' => 'ویرایش کاربران',
               'assets' => array(
                   'custom' => array(
                       'css' => array(
                       ),
                       'js' => array(
                       ),
                   ),
               ),
           )
        ),
        'delete' => array(
            '*'=>array(
                'title' => 'خذف کاربران',
                'assets' => array(
                    'custom' => array(
                        'css' => array(
                        ),
                        'js' => array(
                        ),
                    ),
                ),
            )
        )
    ),
    'roles' => array(
        'title' => 'لیست نقش ها',
        'assets' => array(
            'custom' => array(
                'css' => array(
                    'plugins/custom/datatables/datatables.bundle.css',
                ),
                'js' => array(
                    'plugins/custom/datatables/datatables.bundle.js',
                ),
            ),
        ),
        'edit' => array(
            '*'=>array(
                'title' => 'ویرایش نقش',
                'assets' => array(
                    'custom' => array(
                        'css' => array(
                        ),
                        'js' => array(
                        ),
                    ),
                ),
            )
        ),
        'delete' => array(
            '*'=>array(
                'title' => 'حذف نقش',
                'assets' => array(
                    'custom' => array(
                        'css' => array(
                        ),
                        'js' => array(
                        ),
                    ),
                ),
            )
        )
    ),
    'account' => array(
        'overview' => array(
            'title' => 'Account Overview',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/widgets.js',
                    ),
                ),
            ),
        ),

        'settings' => array(
            'title' => 'Account Settings',
            'assets' => array(
                'custom' => array(
                    'js' => array(
                        'js/custom/account/settings/profile-details.js',
                        'js/custom/account/settings/signin-methods.js',
                        'js/custom/modals/two-factor-authentication.js',
                    ),
                ),
            ),
        ),
    ),
);
