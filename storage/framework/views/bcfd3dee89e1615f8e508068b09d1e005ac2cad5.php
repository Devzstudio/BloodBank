<?php $__env->startSection('content'); ?>
<div class="content-fixer">
<div class="row">

<div class="col-md-3">

<form method="GET" action="">
<div class="form-group">
 	  <select name="group" class="form-control">
                                        <option value ="AB +">AB +</option>
                                        <option value ="AB -">AB -</option>
                                        <option value ="A +">A +</option>
                                        <option value ="A -">A -</option>
                                        <option value ="B +">B +</option>
                                        <option value ="B -">B -</option>
                                        <option value ="O +">O +</option>
                                        <option value ="O -">O -</option>
                                 </select>

            </div>
 
</div>

<div class="col-md-3">

 <div class="form-group">
 	  <input name="state" class="form-control" placeholder="State" required >
 
                          </div>
 
</div>
<div class="col-md-3">

 <div class="form-group">
    <input name="district" class="form-control" placeholder="District" required >
 
                          </div>
</div>
<div class="col-md-3">

 <div class="form-group">
<div class="input-group">
	  <input name="city" class="form-control" placeholder="City" required >
<span class="input-group-btn">
         <input type="submit" class="btn btn-default btn-info" value="Search">
      </span>
                      </div>           </div>
</form>

</div>
 </div>



<div class="row">
		
	
	 <?php foreach($users as $user): ?>

	<div class="col-md-4">

	<div class="thumbnail">
	      <div class="caption">


	<h3><a href="<?php echo e(url('donor/'.$user->id)); ?>"> <?php echo e(ucfirst($user->name)); ?> </a> 
	</h3>

	
	
	

	<ul class="list-group">
  <li class="list-group-item">Blood Group : <?php echo e($user->group); ?>ve </li>
  <li class="list-group-item">City : <?php echo e($user->city); ?></li>
  <li class="list-group-item">District : <?php echo e($user->district); ?></li>
  <li class="list-group-item">State : <?php echo e($user->state); ?></li>
  <li class="list-group-item">Weight : <?php echo e($user->weight); ?> kgs</li> 
  <li class="list-group-item">Gender : <?php echo e($user->gender); ?></li> 
  <li class="list-group-item">Age : <?php echo e($user->age); ?></li> 
  <li class="list-group-item">Last Donated : <?php echo e(date('F d, Y h:m A', strtotime($user->last_donated))); ?></li> 
  <li class="list-group-item">Social :   <?php if($user->social != ''): ?>
    <a href="<?php echo e($user->social); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
      <?php if($user->whatsapp == 1): ?>
       <p class="hint--top" data-hint="<?php echo e($user->phone); ?>">
        <i class="fa fa-whatsapp "></i>
      </p>
      <?php endif; ?>

    <?php else: ?>
    
     <p class="hint--top" data-hint="<?php echo e($user->phone); ?>">
    <i class="fa fa-minus"></i> 
</p>
  <?php endif; ?> 
  </li> 

</ul>


	</div>
 </div>
 </div>
 
 
	   
	 <?php endforeach; ?>
</div>

<?php if(count($users) == 0): ?>
<div class="alert alert-info">Sorry !! Currently there is no donors matching your result.</div>
<?php endif; ?>


<?php echo e($users->render()); ?>



</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>