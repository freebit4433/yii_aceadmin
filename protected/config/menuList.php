<?php
/*
 * 配置注意事项：
 * 1.第一级菜单，如果有子菜单，默认href=''，是必须的
 * 2.第一级菜单，active 和 open 默认都是false
 * 3.数组的键必须和其'text'的值相同
 */
return array(
    '首页' => array(
        'text' => "首页",
        'href' => "site/index",
        'icon' => "menu-icon fa fa-tachometer",
        'active' => false,
        'open' => false,
    ),
    '管理员管理' => array(
        'text' => "管理员管理",
        'href' => "employee/index",
        'icon' => "menu-icon fa fa-users",
        'active' => false,
        'open' => false,
    ),
    'menu item 3' => array(
        'text' => "menu item 3",
        'href' => '',
        'icon' => "menu-icon fa fa-gift",
        'active' => false,
        'open' => false,
        'submenu' => array(
            '3_1' => array(
                'text' => "3_1",
                'href' => "site/submenu1",
                'icon' => "menu-icon fa fa-caret-right",
                'active' => false,
            ),
            '3_2' => array(
                'text' => "3_2",
                'href' => "site/submenu2",
                'icon' => "menu-icon fa fa-caret-right",
                'active' => false,
            ),
            '3_3' => array(
                'text' => "3_3",
                'href' => "site/submenu3",
                'icon' => "menu-icon fa fa-caret-right",
                'active' => false,
            ),
        ),
    ),
    'menu item 4' => array(
        'text' => "menu item 4",
        'href' => "site/item4",
        'icon' => "menu-icon fa fa-glass",
        'active' => false,
        'open' => false,
    ),
);
?>