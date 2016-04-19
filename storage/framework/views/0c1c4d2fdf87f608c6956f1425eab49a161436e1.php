<?php $__env->startSection('content'); ?>
 

 <div class="panel panel-default">
  <div class="panel-heading">Message</div>
  <div class="panel-body">
    <table class="table">
    	<tr>
    	  <td> Sender</td>
    	  <td> <?php echo e($message->sender); ?></td>
    	 </tr>

            <tr>
          <td> Phone</td>
          <td> <?php echo e($message->phone); ?></td>
         </tr>

    	 <tr>
    	  <td> Subject</td>
    	  <td> <?php echo e($message->subject); ?></td>
    	 </tr> 

    	 <tr>
    	  <td> Date</td>
    	  <td> <?php echo e(date('F d, Y h:m A', strtotime($message->created_at))); ?></td>
    	 </tr>

    	 <tr>
    	  <td>Message</td>
    	  <td> <?php echo e($message->message); ?></td>
    	 </tr>
 
    </table> 


   <div class="page-header">Reply</div>
  <form action="/message/reply" method="POST">
   <?php echo e(csrf_field()); ?>


<div class="form-group">
<input placeholder="Subject" type="text" name="subject" class="form-control">
</div>
<div class="form-group">
<textarea name="message" class="form-control" placeholder="Message"></textarea>
</div>
<div class="form-group">
<input type="submit" class="btn btn-default">
</div>
</form>
 </div>


  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>