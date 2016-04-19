<?php $__env->startSection('content'); ?>
 

 <div class="panel panel-default">
  <div class="panel-heading"><i class="fa fa-ticket"></i> Camps</div>
  <div class="panel-body">
    
  <table class="table">
  <tr>
     <th>City</th>
     <th>District</th>
     <th>State</th>
     <th>Start</th>
     <th>End</th>
     <th>Actions</th>
  </tr>


   <?php foreach($camps as $camp): ?>
     <tr>
         <td><?php echo e($camp->city); ?></td>
         <td><?php echo e($camp->district); ?></td>
         <td><?php echo e($camp->state); ?></td>
         <td><?php echo e(date('F d, Y h:m A', strtotime($camp->start))); ?></td>
         <td><?php echo e(date('F d, Y h:m A', strtotime($camp->end))); ?></td>
        <td> 
                 <a href="<?php echo e(url('admin/camp/edit/'.$camp->id)); ?>" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a> 
                 <a href="<?php echo e(url('admin/delete/camp/'.$camp->id)); ?>" class="btn btn-default"><i class="fa fa-trash"></i> Delete</a> 
         </td>
     </tr>
   <?php endforeach; ?>


<?php if(count($camps) == 0): ?>
<tr>
<td colspan=6>There is no camps.</td>
</tr>
<?php endif; ?>


  
  </table>


<?php echo e($camps->render()); ?>


  </div>
   
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>