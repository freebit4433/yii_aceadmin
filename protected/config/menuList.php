<?php
/*
 * 配置注意事项：
 * 1.第一级菜单，如果有子菜单，默认href=''，是必须的
 * 2.第一级菜单，active 和 open 默认都是false
 * 3.数组的键必须和其'text'的值相同
 */
return array(
    '首页' => array(
        "site/index",
        "menu-icon fa fa-tachometer",
    ),
    '管理员管理' => array(
        "employee/index",
        "menu-icon fa fa-users",
    ),
    'menu item 3' => array(
        "",
        "menu-icon fa fa-gift",
        array(
            '3_1' => array(
                "site/submenu1",
                "menu-icon fa fa-caret-right",
            ),
            '3_2' => array(
                "site/submenu2",
                "menu-icon fa fa-caret-right",
            ),
            '3_3' => array(
                "site/submenu3",
                "menu-icon fa fa-caret-right",
            ),
        ),
    ),
    'menu item 4' => array(
        "site/item4",
        "menu-icon fa fa-glass",
    ),
);
?>