<?php $__env->startSection('content'); ?>
 

 <div class="panel panel-default">
  <div class="panel-heading">API</div>
  <div class="panel-body">
   
   <h4>Donors list</h4>
   <input type="text" value="<?php echo e(url('api/donors/')); ?>" class="form-control">
   <p class="help-block">Get all donors in Json
   </p>
   Eg: <code><?php echo e(url('api/donors/')); ?></code>
 

   <hr>
      <h4>Donors list sort with blood group</h4>
      <input type="text" value="<?php echo e(url('api/donors/?group=blood_group+%2B')); ?>" class="form-control">
   <p class="help-block">Get donors based on blood group.<br> 
	Replace <code>blood_group</code> with blood group (Blood group should be in url encoded). <br>
	Replace <sign> with + (%2B) or - (-) <br>
  	 </p> 
     Eg: <code><?php echo e(url('api/donors/?group=O+%2B')); ?></code>
   
    <hr>
      <h4>Donors list sort with city</h4>


        <input type="text" value="<?php echo e(url('api/donors/?city=sort_city')); ?>" class="form-control">
   <p class="help-block">Get donors based on city.<br> 
	Replace <code>sort_city</code> with city.
  	 </p>
     Eg: <code><?php echo e(url('api/donors/?city=Ottapalam')); ?></code>

 <hr>
      <h4>Donors list sort with state</h4>
    <input type="text" value="<?php echo e(url('api/donors/?state=sort_state')); ?>" class="form-control">
   <p class="help-block">Get donors based on state.<br> 
	Replace <code>sort_state</code> with state.
  	 </p>
     Eg: <code><?php echo e(url('api/donors/?state=Kerala')); ?></code>


       <hr>
      <h4>Mixed API Call</h4>

    <input type="text" value="<?php echo e(url('api/donors/?group=blood_groupstate=sort_state&city=sort_city')); ?>" class="form-control">
   <p class="help-block">Get donors based on blood group , city , state .<br> 
	Replace <code>blood_group</code> with blood_group (Blood group should be in url encoded).<br>
	Replace <code>sort_city</code> with city.<br>
	Replace <code>sort_state</code> with state.<br>
  	 </p>
     Eg: <code><?php echo e(url('api/donors/?state=Kerala&city=Ottapalam')); ?></code>


  </div>
   
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>