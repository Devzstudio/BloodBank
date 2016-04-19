<?php $__env->startSection('content'); ?>
 

 <div class="panel panel-default">
  <div class="panel-heading"><i class="fa fa-group"></i> Users</div>
  <div class="panel-body">
    
  <table class="table">
  <tr>
     <th>Name</th>
     <th>Email</th>
     <th>Joined</th>
     <th>Last Login</th>
     <th>Donor</th>
     <th>Actions</th>
  </tr>


   <?php foreach($users as $user): ?>
     <tr>
        <td><?php echo e($user->name); ?></td>
        <td><?php echo e($user->email); ?></td>
        <td><?php echo e(date('F d, Y h:m A', strtotime($user->created_at))); ?></td>
        <td><?php echo e(date('F d, Y h:m A', strtotime($user->updated_at))); ?></td>
        <td><?php if( $user->is_donor == 1 ): ?>
        Yes
        <?php else: ?> 
        No
        <?php endif; ?></td>
        <td> 

        <a href="<?php echo e(url('admin/user/edit/'.$user->id)); ?>" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a> 
  
      <?php if($user->id != Auth::user()->id ): ?>

        <?php if($user->is_admin != 1): ?>
        <a href="<?php echo e(url('admin/make/admin/'.$user->id)); ?>" class="btn btn-default"><i class="fa fa-user-plus"></i> Make Admin</a>   
        <?php else: ?>
                      <a href="<?php echo e(url('admin/remove/admin/'.$user->id)); ?>" class="btn btn-default"><i class="fa fa-user-times"></i> Remove Admin</a>   

        <?php endif; ?>
         <a href="<?php echo e(url('admin/delete/user/'.$user->id)); ?>" class="btn btn-default"><i class="fa fa-trash"></i> Delete</a> 
                    
        <?php endif; ?>

         </td>
     </tr>
   <?php endforeach; ?>



  
  </table>


<?php echo e($users->render()); ?>


  </div>
   
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>