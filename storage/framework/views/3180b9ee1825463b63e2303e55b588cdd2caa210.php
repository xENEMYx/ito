<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><?php echo e($device->device_name); ?> <?php echo e($device->device_model); ?></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-5">
                                <a href="#" class="thumbnail">
                                    <img src="/img/img.png" alt="...">
                                </a>
                            </div>
                            <div class="col-md-7">
                                    <p><?php echo e($device->category_name); ?></p>
                                    <p><?php echo e($device->device_name); ?></p>
                                    <p><?php echo e($device->device_model); ?></p>
                                    <p><?php echo e($device->serial_number); ?></p>
                                    <p><?php echo e($device->region_name); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>