<?php $__env->startSection('content'); ?> 
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Camp</div>

                <div class="panel-body">

            <form action="<?php echo e(url('camp/new')); ?>" method="post" >

            <?php echo e(csrf_field()); ?>

  
                       <div class="form-group">
                   <textarea name="details" placeholder="Details" class="form-control" required></textarea>
            </div>
          <div class="form-group">
              <input type="text" name="city" placeholder="City" class="form-control" required></input>
          </div>

  <div class="form-group">
              <input type="text" name="district" placeholder="District" class="form-control" required></input>
          </div>


 <div class="form-group">
              <input type="text" name="state" placeholder="State" class="form-control" required></input>
          </div>



 <div class="form-group">
              <input type="date" name="start" placeholder="Start" class="form-control" id="start" required></input>
          </div>



 <div class="form-group">
              <input type="date" name="end" placeholder="End" class="form-control" id="end" required></input>
          </div>


            <input type="submit" class="btn btn-default" value="Submit"  value="Submit">
            </form>


                </div>
            </div>
        </div>
    </div> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>