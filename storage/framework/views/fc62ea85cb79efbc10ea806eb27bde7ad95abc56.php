<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Оборудование</div>

                <div class="panel-body">
                    <form action="search" method="post">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <div class="form-group">
                            <label>Выбирите объект:</label>
                            <select class="form-control" name="region">
                                <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option> <?php echo e($region->region_name); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Выбирите категорию:</label>
                            <select class="form-control" name="category">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option> <?php echo e($category->category_name); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php if(isset($devices)): ?>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <td class="info">Категория</td>
                        <td class="info">Фирма</td>
                        <td class="info">Модель</td>
                        <td class="info">Серийный номер</td>
                        <td class="info">Объект</td>
                    </tr>
                    <?php $__currentLoopData = $devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tr>
                            <td class="active"><?php echo e($device->category_name); ?></td>
                            <td class="active"><a href="device/<?php echo e($device->id); ?>"><?php echo e($device->device_name); ?></a></td>
                            <td class="active"><?php echo e($device->device_model); ?></td>
                            <td class="active"><?php echo e($device->serial_number); ?></td>
                            <td class="active"><?php echo e($device->region_name); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>