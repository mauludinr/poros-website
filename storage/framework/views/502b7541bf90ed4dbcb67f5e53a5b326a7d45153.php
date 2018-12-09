<?php $__env->startSection('content'); ?>

<div class="pageWrapper blocksWrapper">
    <section class="block">
        <h3 class="block--title">
            Login
        </h3>
        <form action="<?php echo e(route('user.postLogin')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php if( isset($call) ): ?>
            <div class="alert-danger">
                <strong><?php echo e($call['message']); ?></strong>
            </div>
            <?php endif; ?>
            <input type="text" name="username" placeholder="NIM" value= "<?php if( isset($call) ): ?><?php echo e($call['nim']); ?><?php endif; ?>" autocomplete="off" required>
            <input type="password" name="password" placeholder="Password" required>
            <div class="actionWrapper">
                <a href="https://bais.ub.ac.id/session/forget/">Lupa Password?</a>
                <button type="submit" class="cta cta-colored cta-blue">Login</button>
            </div>
        </form>

    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>