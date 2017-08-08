<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">My Bids</h1>
        </div>
    </div>
    <div class="row">
        <?php $__currentLoopData = $bids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <div class="col-lg-4 col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel-body" style="padding: 10px;">
                        <div class="flightpanel">
                            <div class="airline-text"><?php echo e($s->airline->icao); ?><?php echo e($s->flightnum); ?></div>
                            <div class="arrdep"><?php echo e($s->depapt->icao); ?> - <?php echo e($s->arrapt->icao); ?></div>
                            <div class="flightpanel-details">
                                <div><?php echo e($s->aircraft->name); ?> (<?php echo e($s->aircraft->registration); ?>) :<i class="fa fa-plane fa-fw"></i></div>
                                <div><?php echo e($s->deptime); ?> :D<i class="fa fa-clock-o fa-fw"></i></div>
                                <div><?php echo e($s->arrtime); ?> :A<i class="fa fa-clock-o fa-fw"></i></div>
                            </div>
                            <img id="airline-icon" src="<?php echo e(url('/img/AirlineLogos/LogoIcon.png')); ?>"/>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <span class="pull-right">
                            <a href="#" class="btn btn-primary" role="button">Details</a>
                            <a href="#" class="btn btn-success" role="button">Briefing</a>
                            <a href="#" class="btn btn-danger" role="button" onclick="event.preventDefault();
                                                     document.getElementById('delete-bid<?php echo e($s->id); ?>').submit();">Cancel</a>
                            <form id="delete-bid<?php echo e($s->id); ?>" method="POST" action="<?php echo e(url('/flightops/bids/'.$s->id)); ?>" accept-charset="UTF-8" hidden>
                                <?php echo e(csrf_field()); ?>

                                <input name="_method" type="hidden" value="DELETE">
                            </form>
                        </span>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.crewops', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>