<?php if(session()->has('flash_message')): ?>
<script>
swal({
 title: "<?php echo e(session('flash_message.title')); ?>",
 text: "<?php echo e(session('flash_message.message')); ?>",
 type: "<?php echo e(session('flash_message.level')); ?>",
 <?php if(session('flash_message.button')  == 'false'): ?>
 timer: 2000,
 <?php endif; ?> 
 showConfirmButton: <?php echo e(session('flash_message.button')); ?>	
});
</script>
<?php endif; ?>