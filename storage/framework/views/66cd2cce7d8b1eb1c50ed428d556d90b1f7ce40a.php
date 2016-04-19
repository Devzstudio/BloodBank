<?php $__env->startSection('content'); ?>
 
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                  Blood Donation Camps  
                        <div class="pull-right"><a href="<?php echo e(url('camp/new')); ?>">Submit Camp</a></div>
                </div>
<br>
                <div class="panel-body">
                
               <?php foreach($camps as $camp ): ?>
              <div class="thumbnail">
              <div class="camps">
                <p> 
                
                        <div class="panel panel-default">
                          <div class="panel-body">
                           <?php echo e($camp->details); ?>

                          </div>
                        </div>
                </p>
                <p> Place : <?php echo e($camp->city); ?> , <?php echo e($camp->district); ?> , <?php echo e($camp->state); ?> </p>
                <p> Start : <?php echo e(date('F d, Y h:m A', strtotime($camp->start))); ?> </p>
                <p> End : <?php echo e(date('F d, Y h:m A', strtotime($camp->end))); ?> </p>
              </div>
              </div>
               <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>