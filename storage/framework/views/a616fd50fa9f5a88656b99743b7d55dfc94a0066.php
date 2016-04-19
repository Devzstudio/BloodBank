<?php $__env->startSection('content'); ?>
 

 <div class="panel panel-default">

  <div class="panel-heading">
  <div class="pull-right"><a href="<?php echo e(url('admin/delete/support/'.$support->id)); ?>">Delete</a></div>

  <i class="fa fa-ticket"></i> Support Message</div>
  <div class="panel-body">

<table class="table">
  
  <tr>
    <td>Name</td>
    <td> <?php echo e($support->name); ?></td>
  </tr>  

<tr>
    <td>Email</td>
    <td> <?php echo e($support->email); ?></td>
  </tr>  

  <tr>
    <td>Created at</td>
    <td> <?php echo e(date('F d, Y h:m A', strtotime($support->created_at))); ?></td>
  </tr>  

  <tr>
    <td>Message</td>
    <td> <?php echo e($support->message); ?></td>
  </tr>  



</table>
   

   <div class="page-header">Reply</div>
  <form action="/admin/reply" method="POST">
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
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>