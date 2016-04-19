<?php $__env->startSection('content'); ?>
 

 <div class="panel panel-default">
  <div class="panel-heading"><i class="fa fa-ticket"></i> Edit Center</div>
  <div class="panel-body">
    

<form action="<?php echo e(url('admin/center/edit/'.$center->id)); ?>" method="POST">
<?php echo e(csrf_field()); ?>

 
 <div class="form-group">
                          Name                 
                   <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo e($center->state); ?>">
            </div>


 <div class="form-group">
                          Phone                 
                   <input type="text" name="phone" class="form-control" placeholder="Phone" value="<?php echo e($center->phone); ?>">
            </div>



 <div class="form-group">
                          State                 
                   <input type="text" name="state" class="form-control" placeholder="State" value="<?php echo e($center->state); ?>">
            </div>

 <div class="form-group">
                          District                 
                   <input type="text" name="district" class="form-control" placeholder="District" value="<?php echo e($center->district); ?>">
            </div>


 <div class="form-group">
                          City                 
                   <input type="text" name="city" class="form-control" placeholder="City" value="<?php echo e($center->city); ?>">
            </div>


 
     <div class="form-group">
            <input type="submit" class="btn btn-default"  value="Submit">
            </div>

  </form>
  </div>
   
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>