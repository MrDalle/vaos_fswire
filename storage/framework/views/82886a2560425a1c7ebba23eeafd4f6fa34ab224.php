<?php $__env->startSection('pageinfo'); ?>
<p>To start a fresh install, please enter the information below. Make sure you setup your .env file within the
    application directory. For detailed instructions regarding this step, please see the documentation.
</p>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12" style="text-align: center;">
        <h2>Please fill out the form below</h2>
        <hr>
    </div>
    <div class="col-lg-6 col-lg-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                Fresh Installation - Settings
            </div>
            <div class="panel-body">
                <p class="text-muted">Put your Settings in to the Form</p>
                <form role="form" method="POST" action="<?php echo e(url('/settings')); ?>">
                    <?php echo e(csrf_field()); ?>

                    
                    
                    <div class="input-group m-b-1">
                        <span class="input-group-addon">Application URL</span>
                        <input type="text" name="APP_URL" class="form-control" value="<?php echo e($data['APP_URL']); ?>" placeholder="http://yoursite.com/" autofocus required>
                    </div>
                    <div class="input-group m-b-1">
                        <span class="input-group-addon">Organisation Name</span>
                        <input type="text" name="VAOS_ORG_NAME" class="form-control" value="<?php echo e($data['VAOS_ORG_NAME']); ?>" placeholder="Your Org Name" required>
                    </div>
                    <div class="input-group m-b-1">
                        <span class="input-group-addon">Organisation Email</span>
                        <input type="text" class="form-control" name="VAOS_ORG_EMAIL" value="<?php echo e($data['VAOS_ORG_EMAIL']); ?>" placeholder="admin@example.com" required>
                    </div>
                    <div class="input-group m-b-1">
                        <span class="input-group-addon">Database Name</span>
                        <input type="text" class="form-control" name="DB_DATABASE" value="<?php echo e($data['DB_DATABASE']); ?>" placeholder="" required>
                    </div>
                    <div class="input-group m-b-1">
                        <span class="input-group-addon">Database User</span>
                        <input type="text" class="form-control" name="DB_USERNAME" value="<?php echo e($data['DB_USERNAME']); ?>" placeholder="" required>
                    </div>
                    <div class="input-group m-b-1">
                        <span class="input-group-addon">Database Password</span>
                        <input type="password" name="DB_PASSWORD" class="form-control" value="<?php echo e($data['DB_PASSWORD']); ?>" placeholder="Password" required>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-block btn-success">Save Settings &amp; Continue</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('install.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>