<?php $__env->startSection('content'); ?>
 
 <div class="panel panel-default">
  <div class="panel-heading">Request Details</div>
  <div class="panel-body">
    <table class="table">
    	<tr>
    	  <td> Name</td>
    	  <td> <?php echo e($request->patient); ?></td>
    	 </tr>
  
    	 <tr>
    	  <td>Group</td>
    	  <td> <?php echo e($request->group); ?></td>
    	 </tr>

    	 <tr>
    	  <td>Hospital Address</td>
    	  <td> <?php echo e($request->hospital); ?></td>
    	 </tr>


    	 <tr>
    	  <td> City</td>
    	  <td> <?php echo e($request->city); ?></td>
    	 </tr>
		
		   <tr>
        <td> District</td>
        <td> <?php echo e($request->district); ?></td>
       </tr>
    

    <tr>
    	  <td> State</td>
    	  <td> <?php echo e($request->state); ?></td>
    	 </tr>

    	 <tr>
    	  <td>Phone</td>
    	  <td> <?php echo e($request->contact_phone); ?></td>
    	 </tr>

		
    	 <tr>
          <td>Email</td>
          <td> <?php echo e($request->contact_email); ?></td>
         </tr>
 
     <tr>
          <td>Required on </td>
          <td> <?php echo e(date('F d, Y h:m A', strtotime($request->when))); ?></td>
         </tr>
 


    </table> 
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>