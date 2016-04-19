<?php $__env->startSection('content'); ?>
 
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                 Blood Center
                        <div class="pull-right"><a href="<?php echo e(url('center/new')); ?>">Submit Blood Center</a></div>
                </div> 
                <div class="panel-body">
                <table class="table"> 
                <tr>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>State</th>
                  <th>District</th>
                  <th>City</th>
                  <th>Landmark</th>
                </tr>
               <?php foreach($centers as $center ): ?>
             <tr>
                      <td>  <?php echo e($center->name); ?> </td>
                      <td>  <?php echo e($center->phone); ?> </td>
                           <td> <?php echo e($center->city); ?> </td>
                        <td>    <?php echo e($center->district); ?> </td>
                         <td>   <?php echo e($center->state); ?> </td>
                         <td>   <?php echo e($center->landmark); ?> </td>

               </tr>
               <?php endforeach; ?>
                </table>
                </div>
            </div>
        </div>
    </div>
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>