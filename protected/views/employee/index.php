<?php
/**
 * Created by wenhao.zhang
 * Date: 2016/4/5
 * Time: 14:51
 * Describe: Employee/index模板
 */
?>

<!--<div class="row">
    <div class="col-md-1 col-md-offset-9">
        <a href="<?php /*echo $this->createUrl('employee/create'); */?>" class="btn btn-sm btn-purple btn-round btn-bold">
            <i class="ace-icon fa fa-coffee"></i>
            创建
        </a>
    </div>
</div>-->
<div class="row">
    <div class="col-md-10">
        <a href="<?php echo $this->createUrl('employee/create'); ?>" class="btn btn-sm btn-purple btn-round btn-bold">
            <i class="ace-icon fa fa-coffee"></i>
            创建用户
        </a>
        <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'dataProvider'=>$model->search(),
                'columns'=>array(
                    array(
                        'name' => 'name',
                        'header' => '用户名',
                    ),
                    /*array(
                        'name' => 'password',
                        'header' => '密码',
                    ),*/
                    array(
                        'name'=>'create_time',
                        'header' => '创建时间',
                        'value'=>'date("Y-m-d", $data->ctime)',
                    ),
                    array(
                        'name'   => 'type',
                        'header' => '用户类型',
                        'value'  => 'employee::$type[$data->type]',
                        'filter' => employee::$type,
                    ),
                    array(
                        'class'=>'CButtonColumn',
                        'header' => '操作',
                    ),
                ),
            ));
        ?>
    </div>
</div>

