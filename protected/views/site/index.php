<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>site/indexPage</h1>
<br/>
<?php
if(Yii::app()->user->isGuest){
    echo "请登录后再操作";
}else{
    echo "当前登录用户为:{Yii::app()->user->id;}";
}


?>