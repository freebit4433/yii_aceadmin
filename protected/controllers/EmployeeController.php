<?php

class EmployeeController extends Controller{

    public $item = "首页";
    public $subItem = null;

    public function actionIndex(){
        $this->item = "管理员管理";
        $this->subItem = null;
        $this->render('index');
    }


}


?>