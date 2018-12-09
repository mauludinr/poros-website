<?php $__env->startSection('content'); ?>

        <div class="page home">
        	<div class="pageWrapper">
        		<div class="centeredContainer">
        			<div class="catchZone">
        				<div class="hello">
        					<span id="intro">
        						<span>H</span>
        						<span>e</span>
        						<span>l</span>
        						<span>l</span>
        						<span>o</span>
        						<span>.</span>
        					</span>
        				</div>
        			</div>

        			<div class="catchPhrase">
        				<p>
    						<span>Pendataan Piket</span>
                <span>has never been so cool.</span>
        				</p>
        			</div>

        		</div>
        	</div>
        </div>

    <?php echo $__env->make('components.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>