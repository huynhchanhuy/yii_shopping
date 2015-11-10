<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
<!--	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

<!--	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />-->

        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.min.css"/>
        <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/menu.css"/><script type="text/javascript" src="js/menu.js"></script>
        
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container">
    <div id="main">
        <div id="header">
            <div class="row">
                <div id="logo" class="col-lg-6"><img src="<?php echo Yii::app()->params['logo']; ?>"></div>
                <div id="social" class="col-lg-6 text-right">
                </div>
            </div>
        </div>

            <div id="content">
            <!-- <div style="float: left; max-height: 200px; width: 200px; margin: 5px;">
                    <?php
                            $this->widget('ShoppingCartWidget'); 
                            $this->widget('ProductCategoriesWidget'); 
                            if(!Yii::app()->user->isGuest) 
                                    $this->widget('AdminWidget');

                    ?>	
            </div> -->

                    <div style="width: 700px;">
                            <?php echo $content; ?>
                    </div>
            </div>

            <div style="clear: both;"></div>

            <div id="footer" class="box">
<!--                <a href=""><img src="image/btn-top.png" width="49" height="50" /></a>-->
                <div class="row">
                    <div class="col-lg-4" id="title-ft">
                        <p>DUMMY TEXT</p>
                            <span>Pellentesque habitant morbi tristique senectus et netus et male</span>
                    </div>
                </div>
                <div id="credit">
                    Copyright &copy; <?php echo date('Y'); ?> by Hiep Phong.<br/>
                        All Rights Reserved.<br/>
                        Developed by Huy Huynh - Email: huynhchanhuy@gmail.com.<br/>
                        <?php echo Yii::powered(); ?>
                </div>
            </div><!-- footer -->
    </div>
</div><!-- page -->

</body>
</html>
