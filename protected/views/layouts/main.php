<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>main layouts</title>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/themes/ace_admin_1.3.4/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/themes/ace_admin_1.3.4/assets/css/ace.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/themes/ace_admin_1.3.4/assets/css/font-awesome.css">
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/ace_admin_1.3.4/assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/ace_admin_1.3.4/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/ace_admin_1.3.4/assets/js/ace.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/ace_admin_1.3.4/assets/js/ace-elements.js"></script>
</head>
<body class="no-skin">
    <div class="navbar" id="navbar">
        <div id="navbar-container" class="navbar-container">
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <i class="ace-icon fa fa-leaf"></i>
                        阿虎学术后台管理系统&nbsp;V0.1
                    </small>
               </a>
            </div><!-- /.navbar-header -->
            <div class="navbar-buttons navbar-header pull-right" role="navigation">
                <ul class="nav ace-nav">
                    <li class="light-blue">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <img class="nav-user-photo" src="<?php echo Yii::app()->baseUrl; ?>/themes/ace_admin_1.3.4/assets/avatars/user.jpg" alt="Jason's Photo" />
                            <span class="user-info">
                                <small>Welcome,</small>
                                Jason
                            </span>

                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>

                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-cog"></i>
                                    Settings
                                </a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-power-off"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <div class="main-container" id="main-container">
        <div class="sidebar responsive" id="sidebar">
            <!-- <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                <button class="btn btn-success"><i class="ace-icon fa fa-signal"></i></button>
                <button class="btn btn-info"><i class="ace-icon fa fa-pencil"></i></button>
                <button class="btn btn-warning"><i class="ace-icon fa fa-users"></i></button>
                <button class="btn btn-danger"><i class="ace-icon fa fa-cogs"></i></button>
                </div>
            </div> -->
            <?php
                $menuList = array(
                    array(
                        'text' => "首页",
                        'href' => "{$this->createUrl('site/indexPage')}",
                        'icon' => "menu-icon fa fa-tachometer",
                        'active' => false,
                        'open' => false,
                    ),
                    array(
                        'text' => "管理员管理",
                        'href' => "{$this->createUrl('site/managerPage')}",
                        'icon' => "menu-icon fa fa-users",
                        'active' => false,
                        'open' => false,
                    ),
                    array(
                        'text' => "menu item 3",
                        'icon' => "menu-icon fa fa-gift",
                        'active' => false,
                        'open' => false,
                        'submenu' => array(
                            array(
                                'text' => "3_1",
                                'href' => "{$this->createUrl('site/submenu1Page')}",
                                'icon' => "menu-icon fa fa-caret-right",
                                'active' => false,
                            ),
                            array(
                                'text' => "3_2",
                                'href' => "{$this->createUrl('site/submenu2Page')}",
                                'icon' => "menu-icon fa fa-caret-right",
                                'active' => false,
                            ),
                        ),
                    ),
                    array(
                        'text' => "menu item 4",
                        'href' => "",
                        'icon' => "menu-icon fa fa-glass",
                        'active' => false,
                        'open' => false,
                    ),
                );
                /*echo '<ul class="nav nav-list">';
                foreach($menuList as $menuItem){

                }
                echo '</ul>';*/
            ?>
            <ul class="nav nav-list">
                <!-- 1 level item -->
                <li class="">
                    <a href="<?php echo $this->createUrl('site/indexPage'); ?>">
                        <i class="menu-icon fa fa-tachometer"></i>
                        <span class="menu-text">
                            首页
                        </span>
                    </a>
                </li>
                <!-- 2 level item -->
                <li class="active">
                    <a href="<?php echo $this->createUrl('site/managerPage'); ?>">
                        <i class="menu-icon fa fa-users"></i>
                        <span class="menu-text">
                            管理员管理
                        </span>
                    </a>
                </li>
                <!-- 3 level item -->
                <li class="">
                    <a href="" class="dropdown-toggle">
                        <i class="menu-icon fa fa-gift"></i>
                        <span class="menu-text">
                            menu item 3
                        </span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="">
                            <a href="<?php echo $this->createUrl('site/submenu1Page'); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                3_1
                            </a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="<?php echo $this->createUrl('site/submenu2Page'); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                3_2
                            </a>
                    
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
                <!-- 4 level item -->
                <li>
                    <a href="">
                        <i class="menu-icon fa fa-glass"></i>
                        <span class="menu-text">
                            menu item 4
                        </span>
                    </a>
                </li>
                
            </ul>
            <!-- <div class="sidebar-toggle">
                
            </div> -->
        </div>

        <div class="main-contain">
            <?php echo $content; ?>
        </div>
    </div>
    
</body>
</html>