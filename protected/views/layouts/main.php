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

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
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
                                <?php echo Yii::app()->user->name; ?>
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
                                <a href="<?php echo $this->createUrl('site/logout'); ?>">
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
            $menuList = $this->menuList;
            if(strpos($_SERVER['REQUEST_URI'],'?r=')){
                $url = explode('?r=',$_SERVER['REQUEST_URI'])[1];
                if(strpos($url,'&')) {
                    $url = explode('&', $url)[0];
                }
            }else{
                $url = 'site/index';
            }
            ?>
            <ul class="nav nav-list">
                <?php foreach($menuList as $name => $item) { ?>
                    <li class="<?php
                    if(in_array($url,$item)){
                        echo "active ";
                    }
                    if(isset($item[2])){
                        foreach($item[2] as $subItem){
                            if(in_array($url,$subItem)){
                                echo "open";
                            }
                        }
                    }
                    ?> ">
                        <a href="<?php echo Yii::app()->createUrl($item[0]);?>" class="<?php if(isset($item[2])) echo "dropdown-toggle"; ?>">
                            <i class="<?php echo $item[1]; ?>"></i>
                            <span class="menu-text"><?php echo $name; ?></span>
                            <?php
                            if(isset($item[2])){
                                echo "<b class=\"arrow fa fa-angle-down\"></b>";
                            }
                            ?>
                        </a>
                        <?php if(isset($item[2])) { ?>
                            <ul class="submenu">
                                <?php foreach($item[2] as $subName => $subItem){ ?>
                                    <li class="<?php if($url == $subItem[0]) echo 'active'; ?> ">
                                        <a href="<?php echo Yii::app()->createUrl($subItem[0]); ?>">
                                            <i class="<?php echo $subItem[1]; ?>"></i>
                                            <?php echo $subName; ?>
                                            <b class="arrow"></b>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </li>
                <?php } ?>
            </ul>
        </div>

        <div class="main-content">
            <div class="breadcrumbs">
                <?php
                    $this->widget('zii.widgets.CBreadcrumbs', array(
                        'links'=>$this->breadcrumbs,
                    ));
                ?>
            </div>
            <div class="page-content">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
    
</body>
</html>