<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item"><a href="#">Admin</a>
    </li>
    <li class="breadcrumb-item active">Dashboard</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-xs-6 col-lg-3">
        <div class="card">
            <div class="card-block p-a-1 clearfix">
                <?php if(\App\PIREP::where('status', 0)->count()): ?>
                    <i class="fa fa-plane bg-danger p-a-1 font-2xl m-r-1 pull-left"></i>
                    <div class="h5 text-danger m-b-0 m-t-h"><?php echo e(\App\PIREP::where('status', 0)->count()); ?></div>
                <?php else: ?>
                    <i class="fa fa-plane bg-success p-a-1 font-2xl m-r-1 pull-left"></i>
                    <div class="h5 text-success m-b-0 m-t-h"><?php echo e(\App\PIREP::where('status', 0)->count()); ?></div>
                <?php endif; ?>
                <div class="text-muted text-uppercase font-weight-bold font-xs">Pending PIREPs</div>
            </div>
            <?php if(\App\PIREP::where('status', 0)->count()): ?>
                <div class="card-footer p-x-1 p-y-h">
                    <a class="font-weight-bold font-xs btn-block text-muted" href="<?php echo e(url('admin/pireps?view=pending')); ?>">Review Pending PIREPs <i class="fa fa-angle-right pull-right font-lg"></i></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-xs-6 col-lg-3">
        <div class="card">
            <div class="card-block p-a-1 clearfix">
                <i class="fa fa-users bg-primary p-a-1 font-2xl m-r-1 pull-left"></i>
                <div class="h5 text-primary m-b-0 m-t-h"><?php echo e(\App\User::where('status', 1)->count()); ?></div>
                <div class="text-muted text-uppercase font-weight-bold font-xs">Active Pilots</div>
            </div>
            <div class="card-footer p-x-1 p-y-h">
                <a class="font-weight-bold font-xs btn-block text-muted" href="<?php echo e(url('admin/users')); ?>">View More <i class="fa fa-angle-right pull-right font-lg"></i></a>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-lg-3">
        <div class="card">
            <div class="card-block p-a-1 clearfix">
                <i class="fa fa-book bg-primary p-a-1 font-2xl m-r-1 pull-left"></i>
                <div class="h5 text-primary m-b-0 m-t-h"><?php echo e(\App\PIREP::all()->count()); ?></div>
                <div class="text-muted text-uppercase font-weight-bold font-xs">Logged Flights</div>
            </div>
            <div class="card-footer p-x-1 p-y-h">
                <a class="font-weight-bold font-xs btn-block text-muted" href="<?php echo e(url('admin/pireps')); ?>">View More <i class="fa fa-angle-right pull-right font-lg"></i></a>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-lg-3">
        <div class="card">
            <div class="card-block p-a-1 clearfix">
                <i class="fa fa-globe bg-primary p-a-1 font-2xl m-r-1 pull-left"></i>
                <div class="h5 text-primary m-b-0 m-t-h"><?php echo e(\App\ScheduleTemplate::where('enabled', 1)->count()); ?></div>
                <div class="text-muted text-uppercase font-weight-bold font-xs">Total Routes</div>
            </div>
            <div class="card-footer p-x-1 p-y-h">
                <a class="font-weight-bold font-xs btn-block text-muted" href="<?php echo e(url('admin/schedule')); ?>">View More <i class="fa fa-angle-right pull-right font-lg"></i></a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>