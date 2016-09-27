<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Панель администратора</div>
                    <div class="panel-body">
                        <div id="accordion" class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse1" data-parent="#accordion" data-toggle="collapse">Добавить объект</a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <form action="admin" method="post">
                                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                            <div class="form-group">
                                                <input class="form-control" name="region" placeholder="Укажите название объекта"></input>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-right">Отправить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse2" data-parent="#accordion" data-toggle="collapse">Добавить категорию</a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <form action="admin" method="post">
                                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                            <div class="form-group">
                                                <input class="form-control" name="category" placeholder="Укажите название категории"></input>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-right">Отправить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse3" data-parent="#accordion" data-toggle="collapse">Добавить оборудование</a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <form action="admin" method="post">
                                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                            <div class="form-group">
                                                <input class="form-control" name="device_name" placeholder="Укажите название"></input>
                                                <input class="form-control" name="region_name" placeholder="Укажите объект установки"></input>
                                                <input class="form-control" name="category_name" placeholder="Укажите категорию"></input>
                                                <input class="form-control" name="serial_number" placeholder="Укажите серийный номер"></input>
                                                <input class="form-control" name="device_model" placeholder="Укажите модель"></input>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-right">Отправить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>