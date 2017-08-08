<?php $__env->startSection('head'); ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
        <div class="row" style="">
            <div class="col l8 offset-l2">
                <div class="card">
                    <div class="card-image" style="overflow: hidden; height: 300px;">
                        <img
                             src="https://raw.githubusercontent.com/CardinalHorizon/VAOS/master/public/img/login.png">
                        <span style="font-size: 30px;" class="card-title">Airline Schedule</span>
                    </div>
                    <form action="<?php echo e(url('/flightops/schedule')); ?>" method="GET">
                    <div class="card-content">
                        <div class="row" style="margin-bottom: 0;">
                            <div class="col s12">
                                <div class="row" style="margin-bottom: 0;">
                                    <div class="input-field col s6">
                                        <select name="depapt">
                                            <option value="0" selected>Any</option>
                                            <?php $__currentLoopData = App\Models\Airport::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                                <option value="<?php echo e($a->id); ?>"><?php echo e($a->icao); ?> - <?php echo e($a->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                        </select>compcompocompioasdffasdf
                                        <label>Departure Airport</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <select name="arrapt">
                                            <option value="0" selected>Any</option>
                                            <?php $__currentLoopData = App\Models\Airport::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                                <option value="<?php echo e($a->id); ?>"><?php echo e($a->icao); ?> - <?php echo e($a->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                        </select>
                                        <label>Arrival Airport</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn green darken-3" type="submit">Apply Filter</button>
                        <div class="right">


                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col s12">
                <?php echo e($schedules->appends(\Illuminate\Support\Facades\Input::except('page'))->links('vendor.pagination.material')); ?>

            </div>

        </div>
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <div class="col s6">
                    <div class="card sticky-action">
                        <div class="card-image grey darken-3" style="height:150px; overflow: hidden;">
                            <!-- <img class="activator" src="https://raw.githubusercontent.com/CardinalHorizon/VAOS/master/public/img/login.png"> -->
                            <img style="width: 150px; height: 150px; position: absolute;" src="<?php echo e($s->airline->widget); ?>">
                            <span style="bottom: -20px; font-size: 30px;z-index: 1;" class="card-title"><?php echo e($s->airline->icao); ?><?php echo e($s->flightnum); ?></span>
                        </div>

                        <div class="card-content">
                            <a style="position: absolute;right: 24px;bottom: 135px;" class="btn-floating activator waves-effect waves-light red"><i class="material-icons">more_vert</i></a>
                            <span style="display: inline-flex; vertical-align: middle;" class="card-title activator grey-text text-darken-4"><?php echo e($s->depapt->icao); ?><i class="material-icons">&#xE5C8;</i><?php echo e($s->arrapt->icao); ?><i class="material-icons"></i></span>
                        </div>
                        <div class="card-reveal" style="z-index: 2;">
                            <span class="card-title grey-text text-darken-4"><?php echo e($s->airline->icao); ?><?php echo e($s->flightnum); ?><i class="material-icons right">close</i></span>
                            <ul class="collection with-header">
                                <li class="collection-item"><div>Aircraft Group<div class="secondary-content"><?php if($s->aircraft_group == null): ?>
                                                Not Assigned
                                            <?php else: ?>
                                                <?php echo e($s->aircraft_group->name); ?>

                                            <?php endif; ?></div></div></li>
                                <li class="collection-item"><div>Airline<div class="secondary-content"><?php echo e($s->airline->name); ?></div></div></li>
                            </ul>
                        </div>
                        <form action="<?php echo e(url('/flightops/bids')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <input hidden name="schedule_id" value="<?php echo e($s->id); ?>"/>
                            <div class="card-action">
                                <button type="submit" class="btn green">Simple Bid</button>
                                <a class="btn blue" disabled>Advanced Bid</a>
                            </div>
                        </form>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('select').material_select();
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.crewops', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>