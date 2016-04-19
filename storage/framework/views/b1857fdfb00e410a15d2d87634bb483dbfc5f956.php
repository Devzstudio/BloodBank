<?php $__env->startSection('content'); ?> 
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Change Password</div>

                <div class="panel-body">

            <form action="<?php echo e(url('change-password')); ?>" method="post" >

            <?php echo e(csrf_field()); ?>

 
            <div class="form-group">
                                               <p class="hint--top" data-hint="New Password" id="input-field">
                   <input type="password" name="password" class="form-control" placeholder="Password">
                   </p>
            </div>

                   <div class="form-group">
            <input type="submit" class="btn btn-default"  value="Submit">
            </div>

            </form>


                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>