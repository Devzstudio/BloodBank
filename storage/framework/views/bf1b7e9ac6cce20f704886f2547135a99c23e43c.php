<?php $__env->startSection('content'); ?>
 

 <div class="panel panel-default">
  <div class="panel-heading">Donor Details</div>
  <div class="panel-body">
    <table class="table">
    	<tr>
    	  <td> Name</td>
    	  <td> <?php echo e($donor->name); ?></td>
    	 </tr>

       <tr>
        <td> Age</td>
        <td> <?php echo e($donor->age); ?></td>
       </tr> 	 

       <tr>
    	  <td> Gender</td>
    	  <td> <?php echo e($donor->gender); ?></td>
    	 </tr> 

    	 <tr>
        <td> Weight</td>
        <td> <?php echo e($donor->weight); ?> kgs</td>
       </tr> 


       <tr>
    	  <td> Last Donated</td>
    	  <td>  <?php echo e(date('F d, Y h:m A', strtotime($donor->last_donated))); ?></td>
    	 </tr>

    	 <tr>
    	  <td>Group</td>
    	  <td> <?php echo e($donor->group); ?></td>
    	 </tr>

    	 <tr>
    	  <td> Address</td>
    	  <td> <?php echo e($donor->address); ?></td>
    	 </tr>


    	 <tr>
    	  <td> City</td>
    	  <td> <?php echo e($donor->city); ?></td>
    	 </tr>
		

       <tr>
        <td> District</td>
        <td> <?php echo e($donor->district); ?></td>
       </tr>		

    <tr>
    	  <td> State</td>
    	  <td> <?php echo e($donor->state); ?></td>
    	 </tr>

    	 <tr>
    	  <td>Phone</td>
    	  <td> <?php echo e($donor->phone); ?></td>
    	 </tr>

		
    	 <tr>
          <td>Email</td>
          <td> <?php echo e($donor->email); ?></td>
         </tr>

        <tr>
          <td>Social</td>
          <td> 
          <?php if($donor->social != ''): ?>
          <a href="<?php echo e($donor->social); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
           <?php if($donor->whatsapp == 1): ?>
       <p class="hint--top" data-hint="<?php echo e($donor->phone); ?>">
        <i class="fa fa-whatsapp "></i>
      </p>
      <?php endif; ?>
          <?php else: ?>
            -
          <?php endif; ?>
          </td>
         </tr>


    </table>
<hr>
<h4>Send Message</h4>
<hr>
    <form action="<?php echo e(url('message')); ?>" method="POST">
    <?php echo e(csrf_field()); ?>

      <div class="form-group">
      <input type="email" name="sender" class="form-control" placeholder="Email" required>
      </div>  
        <div class="form-group">
      <input type="phone" name="phone" class="form-control" placeholder="Phone" required>
      </div>

      <div class="form-group">
      <input type="text" name="subject" class="form-control" placeholder="Subject" required>
      </div>

      <div class="form-group">
       <textarea placeholder="Message" name="message" class="form-control" required></textarea> 
        </div>

        <input type="hidden" name="receiver" value="<?php echo e($donor->id); ?>">

        <div class="form-group">
      <input type="submit"  class="btn btn-primary" value="Submit">
      </div>
      
      

    </form>

  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>