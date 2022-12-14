<?php

return array(
    // Documentation menu
    'documentation' => array(
        // Getting Started
        array(
            'heading' => 'Getting Started',
        ),

        // Overview
        array(
            'title' => 'Overview',
            'path' => 'documentation/getting-started/overview',
            // 'role' => ['admin'],
            // 'permission' => [],
        ),

        // Build
        array(
            'title' => 'Build',
            'path' => 'documentation/getting-started/build',
        ),

        array(
            'title' => 'Multi-demo',
            'attributes' => array("data-kt-menu-trigger" => "click"),
            'classes' => array('item' => 'menu-accordion'),
            'sub' => array(
                'class' => 'menu-sub-accordion',
                'items' => array(
                    array(
                        'title' => 'Overview',
                        'path' => 'documentation/getting-started/multi-demo/overview',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title' => 'Build',
                        'path' => 'documentation/getting-started/multi-demo/build',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                ),
            ),
        ),

        // File Structure
        array(
            'title' => 'File Structure',
            'path' => 'documentation/getting-started/file-structure',
        ),

        // Customization
        array(
            'title' => 'Customization',
            'attributes' => array("data-kt-menu-trigger" => "click"),
            'classes' => array('item' => 'menu-accordion'),
            'sub' => array(
                'class' => 'menu-sub-accordion',
                'items' => array(
                    array(
                        'title' => 'SASS',
                        'path' => 'documentation/getting-started/customization/sass',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title' => 'Javascript',
                        'path' => 'documentation/getting-started/customization/javascript',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                ),
            ),
        ),

        // Dark skin
        array(
            'title' => 'Dark Mode Version',
            'path' => 'documentation/getting-started/dark-mode',
        ),

        // RTL
        array(
            'title' => 'RTL Version',
            'path' => 'documentation/getting-started/rtl',
        ),

        // Troubleshoot
        array(
            'title' => 'Troubleshoot',
            'path' => 'documentation/getting-started/troubleshoot',
        ),

        // Changelog
        array(
            'title' => 'Changelog <span class="badge badge-changelog badge-light-danger bg-hover-danger text-hover-white fw-bold fs-9 px-2 ms-2">v' . theme()->getVersion() . '</span>',
            'breadcrumb-title' => 'Changelog',
            'path' => 'documentation/getting-started/changelog',
        ),

        // References
        array(
            'title' => 'References',
            'path' => 'documentation/getting-started/references',
        ),


        // Separator
        array(
            'custom' => '<div class="h-30px"></div>',
        ),

        // Configuration
        array(
            'heading' => 'Configuration',
        ),

        // General
        array(
            'title' => 'General',
            'path' => 'documentation/configuration/general',
        ),

        // Menu
        array(
            'title' => 'Menu',
            'path' => 'documentation/configuration/menu',
        ),

        // Page
        array(
            'title' => 'Page',
            'path' => 'documentation/configuration/page',
        ),

        // Page
        array(
            'title' => 'Add NPM Plugin',
            'path' => 'documentation/configuration/npm-plugins',
        ),


        // Separator
        array(
            'custom' => '<div class="h-30px"></div>',
        ),

        // General
        array(
            'heading' => 'General',
        ),

        // DataTables
        array(
            'title' => 'DataTables',
            'classes' => array('item' => 'menu-accordion'),
            'attributes' => array("data-kt-menu-trigger" => "click"),
            'sub' => array(
                'class' => 'menu-sub-accordion',
                'items' => array(
                    array(
                        'title' => 'Overview',
                        'path' => 'documentation/general/datatables/overview',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                ),
            ),
        ),

        // Remove demos
        array(
            'title' => 'Remove Demos',
            'path' => 'documentation/general/remove-demos',
        ),


        // Separator
        array(
            'custom' => '<div class="h-30px"></div>',
        ),

        // HTML Theme
        array(
            'heading' => 'HTML Theme',
        ),

        array(
            'title' => 'Components',
            'path' => '//preview.keenthemes.com/metronic8/demo1/documentation/base/utilities.html',
        ),

        array(
            'title' => 'Documentation',
            'path' => '//preview.keenthemes.com/metronic8/demo1/documentation/getting-started.html',
        ),
    ),

    // Main menu
    'main' => array(
        //// Dashboard
        array(
            'title' => '??????????????',
            'path' => '',
            'icon' => theme()->getSvgIcon("demo1/media/icons/duotune/art/art002.svg", "svg-icon-2"),
        ),

        array(
            'classes' => array('content' => 'pt-8 pb-2'),
            'permission' => array('user index', 'user create', 'role index', 'role create'),
            'content' => '<span class="menu-section text-muted text-uppercase fs-8 ls-1">???????????? ??????????????</span>',
        ),
        array(
            'title' => '??????????????',
            'icon' => array(
                'svg' => theme()->getSvgIcon("demo1/media/icons/duotune/communication/com006.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-person fs-2"></i>',
            ),
            'classes' => array('item' => 'menu-accordion'),
            'permission' => array('user index', 'user create'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub' => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title' => '???????? ??????????????',
                        'path' => 'users',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => array('user index'),
                    ),
                    array(
                        'title' => '?????????? ????????',
                        'path' => 'users/create',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => array('user create'),
                    )
                ),
            ),
        ),
        array(
            'title' => '?????? ?????? ????????????',
            'icon' => array(
                'svg' => theme()->getSvgIcon("demo1/media/icons/duotune/communication/com006.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-person fs-2"></i>',
            ),
            'classes' => array('item' => 'menu-accordion'),
            'permission' => array('role index', 'role create'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub' => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title' => '???????? ?????? ????',
                        'path' => 'roles',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => array('role index'),
                    ),
                    array(
                        'title' => '?????? ????????',
                        'path' => 'roles/create',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => array('role create'),
                    )
                ),
            ),
        ),
        array(
            'title' => '???????? ????????????',
            'icon' => array(
                'svg' => theme()->getSvgIcon("demo1/media/icons/duotune/communication/com006.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-person fs-2"></i>',
            ),
            'permission' => array('account detail', 'account update'),
            'classes' => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub' => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title' => '????????????',
                        'path' => 'account/overview',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => array('account detail'),
                    ),
                    array(
                        'title' => '????????????',
                        'path' => 'account/profile',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => array('account update'),
                    )
                ),
            ),
        ),
        array(
            'classes' => array('content' => 'pt-8 pb-2'),
            'permission' => array('estate-type index','estate-subscription index','estate-document-type index','estate-feature'),
            'content' => '<span class="menu-section text-muted text-uppercase fs-8 ls-1">???????????? ??????????</span>',
        ),
        array(
            'title' => '??????',
            'icon' => array(
                'svg' => theme()->getSvgIcon("demo1/media/icons/duotune/communication/com006.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-person fs-2"></i>',
            ),
            'classes' => array('item' => 'menu-accordion'),
            'permission' => array('estate index'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub' => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title' => '???????????? ????????',
                        'path' => 'estates',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => array('estate index'),
                    )
                ),
            ),
        ),
        array(
            'title' => '?????? ??????',
            'icon' => array(
                'svg' => theme()->getSvgIcon("demo1/media/icons/duotune/communication/com006.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-person fs-2"></i>',
            ),
            'classes' => array('item' => 'menu-accordion'),
            'permission' => array('estate-type index'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub' => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title' => '???????????? ????????',
                        'path' => 'estate-types',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => array('estate-type index'),
                    )
                ),
            ),
        ),
        array(
            'title' => '?????? ??????',
            'icon' => array(
                'svg' => theme()->getSvgIcon("demo1/media/icons/duotune/communication/com006.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-person fs-2"></i>',
            ),
            'classes' => array('item' => 'menu-accordion'),
            'permission' => array('estate-document-type index'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub' => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title' => '???????????? ????????',
                        'path' => 'estate-document-types',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => array('estate-document-type index'),
                    )
                ),
            ),
        ),
        array(
            'title' => '??????????????',
            'icon' => array(
                'svg' => theme()->getSvgIcon("demo1/media/icons/duotune/communication/com006.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-person fs-2"></i>',
            ),
            'classes' => array('item' => 'menu-accordion'),
            'permission' => array('estate-feature index'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub' => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title' => '???????????? ????????',
                        'path' => 'estate-features',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => array('estate-feature index'),
                    )
                ),
            ),
        ),
        array(
            'title' => '????????????????',
            'icon' => array(
                'svg' => theme()->getSvgIcon("demo1/media/icons/duotune/communication/com006.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-person fs-2"></i>',
            ),
            'classes' => array('item' => 'menu-accordion'),
            'permission' => array('estate-subscription index'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub' => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title' => '???????????? ????????',
                        'path' => 'estate-subscriptions',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => array('estate-subscription index'),
                    )
                ),
            ),
        ),
        array(
            'classes' => array('content' => 'pt-8 pb-2'),
            'content' => '<span class="menu-section text-muted text-uppercase fs-8 ls-1">???????????? ??????????</span>',
            'permission' => array('audit-log index', 'system-log create'),
        ),

        // System
        array(
            'title' => '??????????',
            'icon' => array(
                'svg' => theme()->getSvgIcon("demo1/media/icons/duotune/general/gen025.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-layers fs-3"></i>',
            ),
            'classes' => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'permission' => array('audit-log index', 'system-log create'),
            'sub' => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'title' => '?????????? ??????????????',
                        'path' => 'log/audit',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => array('audit-log index'),
                    ),

                    array(
                        'title' => '?????????? ??????????',
                        'path' => 'log/system',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'permission' => array('system-log index'),
                    ),
                ),
            ),
        ),

//        // Separator
//        array(
//            'content' => '<div class="separator mx-1 my-4"></div>',
//        ),

    ),

    // Horizontal menu
    'horizontal' => array(
        // Dashboard
        array(
            'title' => '??????????????',
            'path' => '',
            'classes' => array('item' => 'me-lg-1'),
        ),

        // Resources
        array(
            'title' => '??????????????',
            'classes' => array('item' => 'menu-lg-down-accordion me-lg-1', 'arrow' => 'd-lg-none'),
            'attributes' => array(
                'data-kt-menu-trigger' => "click",
                'data-kt-menu-placement' => "bottom-start",
            ),
            'sub' => array(
                'class' => 'menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px',
                'items' => array(
                    // Documentation
                    array(
                        'title' => 'Documentation',
                        'icon' => theme()->getSvgIcon("demo1/media/icons/duotune/abstract/abs027.svg", "svg-icon-2"),
                        'path' => 'documentation/getting-started/overview',
                    ),

                    // Changelog
                    array(
                        'title' => 'Changelog v' . theme()->getVersion(),
                        'icon' => theme()->getSvgIcon("demo1/media/icons/duotune/general/gen005.svg", "svg-icon-2"),
                        'path' => 'documentation/getting-started/changelog',
                    ),
                ),
            ),
        ),

    ),
);
