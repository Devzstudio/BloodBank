<?php $__env->startSection('content'); ?> 
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registeration</div>
                <div class="panel-body">
                    <form id="registerForm" class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/register')); ?>">
                        <?php echo csrf_field(); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Full Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required >

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                         <div class="form-group<?php echo e($errors->has('age') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Age</label>

                            <div class="col-md-6">
                                <input type="number" id="age" class="form-control" name="age" value="<?php echo e(old('age')); ?>" required>

                                <?php if($errors->has('age')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('age')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                          <div class="form-group<?php echo e($errors->has('gender') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                <select class="form-control" name="gender" required>
                                 <option value="M">Male</option>
                                 <option value="F">Female</option>
                                </select>

                                <?php if($errors->has('gender')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('gender')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        
                        <div class="form-group<?php echo e($errors->has('weight') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Weight</label>

                            <div class="col-md-6">
                                <input type="number" id="weight" class="form-control" name="weight" value="<?php echo e(old('weight')); ?>" required>

                                <?php if($errors->has('weight')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('weight')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                    
                         <div class="form-group<?php echo e($errors->has('group') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Group</label>

                            <div class="col-md-6">
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
                                <?php if($errors->has('group')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('group')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input type="text" id="phone" maxlength="10" class="form-control" name="phone" value="<?php echo e(old('phone')); ?>" required>

                                <?php if($errors->has('phone')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('phone')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                       <div class="form-group<?php echo e($errors->has('whatsapp') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Whatsapp</label>

                            <div class="col-md-6">
                                <select class="form-control" name="whatsapp" required>
                                 <option value="1">Yes</option>
                                 <option value="0" selected="">No</option>
                                </select>

                                <?php if($errors->has('whatsapp')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('whatsapp')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>




                        <div class="form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                            
                                <textarea class="form-control" name="address"><?php echo e(old('address')); ?></textarea>
                                <?php if($errors->has('adress')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('adress')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>




                           <div class="form-group<?php echo e($errors->has('city') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="city" value="<?php echo e(old('city')); ?>" required>

                                <?php if($errors->has('city')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('city')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>



                            
                           <div class="form-group<?php echo e($errors->has('district') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">District</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="district" value="<?php echo e(old('district')); ?>" required>

                                <?php if($errors->has('district')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('district')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                            

                           <div class="form-group<?php echo e($errors->has('state') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">State</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="state" value="<?php echo e(old('state')); ?>" required>

                                <?php if($errors->has('state')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('state')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>



                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation" required>

                                <?php if($errors->has('password_confirmation')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>



                    <div class="form-group<?php echo e($errors->has('is_donor') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Donor</label>

                            <div class="col-md-6">
                                <select class="form-control" name="is_donor" required>
                                 <option value="1">Yes</option>
                                 <option value="0">No</option>
                                </select>

                                <?php if($errors->has('is_donor')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('is_donor')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                         <div class="form-group<?php echo e($errors->has('last_donated') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Last Donated On</label>

                            <div class="col-md-6">
                                <input type="text" id="datetimepicker" class="form-control" name="last_donated" value="<?php echo e(old('last_donated')); ?>" required>

                                <?php if($errors->has('last_donated')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('last_donated')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>