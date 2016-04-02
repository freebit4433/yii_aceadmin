<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="en">
    <title>login layouts</title>

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/themes/ace_admin_1.3.4/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/themes/ace_admin_1.3.4/assets/css/ace.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/themes/ace_admin_1.3.4/assets/css/font-awesome.css">
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/ace_admin_1.3.4/assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/ace_admin_1.3.4/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/ace_admin_1.3.4/assets/js/ace.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/ace_admin_1.3.4/assets/js/ace-elements.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

</head>

<body class="login-layout blur-login">
<div class="main-container">
    <div class="main-content">
        <div class="row"><br/><br/><br/><br/></div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="center">
                        <h1>
                            <i class="ace-icon fa fa-leaf green"></i>
                            <span class="red">阿虎学术</span>
                            <span class="white" id="id-text2">后台管理系统</span>
                        </h1>
                        <h4 class="blue" id="id-company-text">&copy; 北京阿虎科技有限公司</h4>
                    </div>

                    <div class="space-6"></div>

                    <div class="position-relative">
                        <div class="login-box visible widget-box no-border" id="login-box">
                            <!-- login area -->
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header blue lighter bigger">
                                        <i class="ace-icon fa fa-coffee green"></i>
                                        Please Enter Your Information
                                    </h4>

                                    <div class="space-6"></div>

                                    <form action="">

                                    </form>


                                </div>
                            </div>
                        </div>
                        <div class="forgot-box widget-box no-border" id="forgot-box">
                            <!-- forgot area -->
                        </div>
                        <div class="signup-box widget-box no-border" id="signup-box">
                            <!-- signup area -->
                        </div>
                    </div>
                </div><!-- /.login-container -->
            </div><!-- /.col-sm- -->
        </div><!-- /.row -->
    </div><!-- /.main-content -->
</div><!-- /.main-container -->
<!--只使用layout文件，不用site/login模板-->
<?php echo $content; ?>
</body>
</html>