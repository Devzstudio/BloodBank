<?php $__env->startSection('content'); ?> 
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Messages</div>

                <div class="panel-body">
 
 
                <table class="table">
                    <tr>
                    <th>Subject</th>
                    <th>Sender</th>
                    <th>On</th>
                    </tr>


                 <?php foreach($messages as $message): ?>
                    <tr>
                   
                   <td><a href="<?php echo e(url('messages/'.$message->id)); ?>"><?php echo e($message->subject); ?></a></td>
                   <td><?php echo e($message->sender); ?></td>

                   <td>                                   <p class="hint--top" data-hint="<?php echo e(date('F d, Y h:m A', strtotime($message->created_at))); ?>">
<?php echo e($message->created_at->diffForHumans()); ?> </p></td>
                   
                   </tr>
                 <?php endforeach; ?>
             
<?php if(count($messages) == 0): ?>
<tr>
<td colspan="3">You have not received any messages.</td>
</tr>
<?php endif; ?>
                </table>

                </div>
            </div>
        </div>
    </div>





    

     <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Who Needs Blood ? Near Location</div>

                <div class="panel-body">
 
                

                <table class="table">
                    <tr>
                    <th>Name</th>
                    <th>City</th>
                    <th>Group</th>
                    </tr>


                 <?php foreach($requests as $req): ?>
                    <tr>
                   
                   <td><a href="<?php echo e(url('request-details/'.$req->id)); ?>"><?php echo e($req->patient); ?></a></td>
                   <td><?php echo e($req->city); ?></td>
                    <td><?php echo e($req->group); ?></td>

                   
                   </tr>
                 <?php endforeach; ?>
             
<?php if(count($requests) == 0): ?>
<tr>
<td colspan="3">No nearby blood requests.</td>
</tr>
<?php endif; ?>
                </table>



            

                </div>
            </div>
        </div>
    </div>
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>