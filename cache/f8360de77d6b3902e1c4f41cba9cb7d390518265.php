<?php $__env->startSection('content'); ?>
<h2>Usuarios 1</h2>
		<?php if(is_array($all)): ?>
	        <div class="row">
	            <?php foreach($all as $user):?>
	                <div class="col-md-8">
	                    <?php echo $user['nombre']; ?> <?php echo $user['email']; ?>
	                </div>
	            <?php endforeach; ?>
	        </div>
		<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>