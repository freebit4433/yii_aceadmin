<?php

class EmployeeController extends Controller{

    public $item = "管理员管理";
    public $subItem = null;

    public function actionIndex(){
        $employeeModel = new Employee();
        $employeeModel->unsetAttributes();

        $employeeModel->is_del = 0;


        $this->render('index',array(
            'model' => $employeeModel,
        ));
    }

    public function actionTest(){
        $this->render('test');
    }


}


?>