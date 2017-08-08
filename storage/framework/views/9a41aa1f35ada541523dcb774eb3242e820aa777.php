<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item"><a href="<?php echo e(url('admin')); ?>">Admin</a>
    </li>
    <li class="breadcrumb-item"><a href="<?php echo e(url('admin/'.$route)); ?>"><?php echo e(ucfirst($route)); ?></a>
    </li>
    <li class="breadcrumb-item active">Import &amp; Export</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-lg-4">
			<div class="card">
				<div class="card-header">File Import</div>
				<div class="card-block">
					<p>Upload a .JSON file to be imported into the <?php echo e($route); ?> table.</p>
					<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="<?php echo e(url('/admin/data/'.$route.'?action=import')); ?>">
				        <?php echo e(csrf_field()); ?>

				        <input type="file" name="file" id="file">
				        <button type="submit" class="btn btn-success pull-right" role="button">Import</button>
				    </form>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header">File Format Example</div>
				<div class="card-block">
					<p>The file must be uploaded as a JSON (.json) format in the following structure. Below is an example of the structure that should be used.</p>
					<?php echo $__env->make('admin.partials.import_format.'.$route, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</div>
			</div>
		</div>
	</div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>