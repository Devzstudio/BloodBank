<?php $__env->startSection('content'); ?>
 

 <div class="panel panel-default">
  <div class="panel-heading"><i class="fa fa-ticket"></i> Edit Camp</div>
  <div class="panel-body">
    

<form action="<?php echo e(url('admin/camp/edit/'.$camp->id)); ?>" method="POST">
<?php echo e(csrf_field()); ?>

 <div class="form-group">
                          Details                 
                   <textarea class="form-control" name="" placeholder="Details"><?php echo e($camp->details); ?></textarea>  
            </div>


 <div class="form-group">
                          State                 
                   <input type="text" name="state" class="form-control" placeholder="State" value="<?php echo e($camp->state); ?>">
            </div>

 <div class="form-group">
                          District                 
                   <input type="text" name="district" class="form-control" placeholder="District" value="<?php echo e($camp->district); ?>">
            </div>


 <div class="form-group">
                          City                 
                   <input type="text" name="city" class="form-control" placeholder="City" value="<?php echo e($camp->city); ?>">
            </div>



 <div class="form-group">
                          Start                 
                   <input type="text" name="start" class="form-control" placeholder="Start" value="<?php echo e($camp->start); ?>">
            </div>



 <div class="form-group">
                          End                 
                   <input type="text" name="end" class="form-control" placeholder="End" value="<?php echo e($camp->end); ?>">
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