<?php $__env->startSection('content'); ?>
 

 <div class="panel panel-default">
  <div class="panel-heading"><i class="fa fa-ticket"></i> Support</div>
  <div class="panel-body">
    
  <table class="table">
  <tr>
     <th>Name</th>
     <th>Email</th>
     <th>Date</th>
     <th>Actions</th>
  </tr>


   <?php foreach($supports as $support): ?>
     <tr>
         <td><?php echo e($support->name); ?></td>
         <td><?php echo e($support->email); ?></td>
         <td><?php echo e(date('F d, Y h:m A', strtotime($support->created_at))); ?></td>
        <td> 
         <a href="<?php echo e(url('admin/view/support/'.$support->id)); ?>" class="btn btn-default"><i class="fa fa-eye"></i> View</a> 
         <a href="<?php echo e(url('admin/delete/support/'.$support->id)); ?>" class="btn btn-default"><i class="fa fa-trash"></i> Delete</a> 
         </td>
     </tr>
   <?php endforeach; ?>


<?php if(count($supports) == 0): ?>
<tr>
<td colspan=3>There is no messages.</td>
</tr>
<?php endif; ?>


  
  </table>


<?php echo e($supports->render()); ?>


  </div>
   
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>