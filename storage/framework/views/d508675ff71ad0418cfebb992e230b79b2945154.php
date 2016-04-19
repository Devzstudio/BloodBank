<?php $__env->startSection('content'); ?>
 

 <div class="panel panel-default">
  <div class="panel-heading"><i class="fa fa-ticket"></i> Blood Center</div>
  <div class="panel-body">
    
  <table class="table">
  <tr>
     <th>Name</th>
     <th>City</th>
     <th>District</th>
     <th>State</th> 
     <th>Landmark</th> 
     <th>Actions</th>
  </tr>


   <?php foreach($centers as $center): ?>
     <tr>
         <td><?php echo e($center->name); ?></td>
         <td><?php echo e($center->phone); ?></td>
         <td><?php echo e($center->city); ?></td>
         <td><?php echo e($center->district); ?></td>
         <td><?php echo e($center->state); ?></td>
         <td><?php echo e($center->landmark); ?></td>
      <td> 
                 <a href="<?php echo e(url('admin/center/edit/'.$center->id)); ?>" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a> 
                 <a href="<?php echo e(url('admin/delete/center/'.$center->id)); ?>" class="btn btn-default"><i class="fa fa-trash"></i> Delete</a> 
         </td>
     </tr>
   <?php endforeach; ?>


<?php if(count($centers) == 0): ?>
<tr>
<td colspan=5>There is no blood centers.</td>
</tr>
<?php endif; ?>


  
  </table>


<?php echo e($centers->render()); ?>


  </div>
   
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>