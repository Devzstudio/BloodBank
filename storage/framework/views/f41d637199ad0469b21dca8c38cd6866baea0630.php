Click here to reset your password: <?php echo e(url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset())); ?>

