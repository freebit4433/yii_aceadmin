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
                    '首页' => array(
                        'text' => "首页",
                        'href' => "{$this->createUrl('site/index')}",
                        'icon' => "menu-icon fa fa-tachometer",
                        'active' => false,
                        'open' => false,
                    ),
                    '管理员管理' => array(
                        'text' => "管理员管理",
                        'href' => "{$this->createUrl('site/manager')}",
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
                                'href' => "{$this->createUrl('site/submenu1')}",
                                'icon' => "menu-icon fa fa-caret-right",
                                'active' => false,
                            ),
                            '3_2' => array(
                                'text' => "3_2",
                                'href' => "{$this->createUrl('site/submenu2')}",
                                'icon' => "menu-icon fa fa-caret-right",
                                'active' => false,
                            ),
                            '3_3' => array(
                                'text' => "3_3",
                                'href' => "{$this->createUrl('site/submenu3Page')}",
                                'icon' => "menu-icon fa fa-caret-right",
                                'active' => false,
                            ),
                        ),
                    ),
                    'menu item 4' => array(
                        'text' => "menu item 4",
                        'href' => "",
                        'icon' => "menu-icon fa fa-glass",
                        'active' => false,
                        'open' => false,
                    ),
                );
                //$this->item;
                //$this->subItem;
                $mark_me = &$menuList[$this->item];
                $mark_me['active'] = true;
                if(isset($mark_me['submenu'])){
                    if(isset($this->subItem)){
                        $mark_me['open'] = true;
                        $mark_me['submenu'][$this->subItem]['active'] = true;
                    }
                }
            ?>
            <?php echo '<ul class="nav nav-list">';  ?>
                <?php foreach($menuList as $menuItem){ ?>
                    <?php
                    $liClass1 = $menuItem['active'] ? 'active' : '';
                    $liClass2 = $menuItem['open'] ? 'open' : '';
                    echo "<li class=\"{$liClass1} {$liClass2}\">";
                    ?>
                        <?php
                            $idontknow = '';
                            if(isset($menuItem['submenu'])){$idontknow = 'dropdown-toggle';}
                            echo "<a href=\"{$menuItem['href']}\" class=\"{$idontknow}\">";
                        ?>
                            <?php echo "<i class=\"{$menuItem['icon']}\"></i>"; ?>
                            <?php echo "<span class=\"menu-text\">{$menuItem['text']}</span>";  ?>
                            <?php if(isset($menuItem['submenu'])){echo "<b class=\"arrow fa fa-angle-down\"></b>";} ?>
                        <?php echo "</a>";  ?>
                        <?php if(isset($menuItem['submenu'])){ ?>
                            <?php echo "<ul class=\"submenu\">"; ?>
                                <?php foreach($menuItem['submenu'] as $menuSubItem){  ?>
                                    <?php
                                    $subliClass = $menuSubItem['active'] ? 'active' : '';
                                    echo "<li class=\"{$subliClass}\">";
                                    ?>
                                        <?php echo "<a href=\"{$menuSubItem['href']}\" >"; ?>
                                            <?php echo "<i class=\"{$menuSubItem['icon']}\"></i>{$menuSubItem['text']}"; ?>
                                            <?php echo "<b class=\"arrow\"></b>"; ?>
                                        <?php echo "</a>"; ?>
                                    <?php echo "</li>"; ?>
                                <?php } ?>
                            <?php echo "</ul>"; ?>
                        <?php } ?>
                    <?php echo '</li>';  ?>
                <?php } ?>
            <?php echo '</ul>'; ?>


            <!--<ul class="nav nav-list">
                <li class="">
                    <a href="<?php /*echo $this->createUrl('site/index'); */?>">
                        <i class="menu-icon fa fa-tachometer"></i>
                        <span class="menu-text">
                            首页
                        </span>
                    </a>
                </li>
                <li class="active">
                    <a href="<?php /*echo $this->createUrl('site/managerPage'); */?>">
                        <i class="menu-icon fa fa-users"></i>
                        <span class="menu-text">
                            管理员管理
                        </span>
                    </a>
                </li>
                <li class="">
                    <a href="" class="dropdown-toggle">
                        <i class="menu-icon fa fa-gift"></i>
                        <span class="menu-text">
                            menu item 3
                        </span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>
                    <ul class="submenu">
                        <li class="">
                            <a href="<?php /*echo $this->createUrl('site/submenu1Page'); */?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                3_1
                            </a>
                            <b class="arrow"></b>
                        </li>
                        <li class="">
                            <a href="<?php /*echo $this->createUrl('site/submenu2Page'); */?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                3_2
                            </a>
                    
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="">
                        <i class="menu-icon fa fa-glass"></i>
                        <span class="menu-text">
                            menu item 4
                        </span>
                    </a>
                </li>
                
            </ul>-->
            <!-- <div class="sidebar-toggle">
                
            </div> -->
        </div>

        <div class="main-contain">
            <?php echo $content; ?>
        </div>
    </div>
    
</body>
</html>