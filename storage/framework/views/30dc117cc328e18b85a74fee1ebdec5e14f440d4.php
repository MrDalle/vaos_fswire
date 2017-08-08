<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item"><a href="<?php echo e(url('admin/')); ?>">Admin</a></li>
    <li class="breadcrumb-item"><a href="<?php echo e(url('admin/schedule')); ?>">Schedule</a></li>
    <li class="breadcrumb-item active">New Route</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/admin/schedule')); ?>">
        <?php echo e(csrf_field()); ?>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Basic Information
                </div>
                <div class="card-block">
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="select">Airline</label>
                        <div class="col-md-9">
                            <select id="airline" name="airline" class="form-control" size="1">
                                <?php $__currentLoopData = $airlines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($a->icao); ?>"><?php echo e($a->icao); ?> - <?php echo e($a->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Flight Number</label>
                        <div class="col-md-9">
                            <input type="text" id="flightnum" name="flightnum" class="form-control" placeholder="eg. 1126">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Departure</label>
                        <div class="col-md-9">
                            <input type="text" id="depicao" name="depicao" class="form-control" placeholder="eg. KLAX">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Arrival</label>
                        <div class="col-md-9">
                            <input type="text" id="arricao" name="arricao" class="form-control" placeholder="eg. KSEA">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label"></label>
                        <div class="col-md-9">
                            <div class="checkbox">
                                <label for="checkbox1">
                                    <input type="checkbox" id="enabled" name="enabled" value="1"> Enabled
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Route Defaults
                </div>
                <div class="card-block">
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="select">Aircraft Group</label>
                        <div class="col-md-9">
                            <select id="aircraft_group" name="aircraft_group" class="form-control" size="1">
                                <?php $__currentLoopData = $acfgroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acf): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($acf->icao); ?>"><?php echo e($acf->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <!--
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Route</label>
                        <div class="col-md-9">
                            <input type="text" id="route" name="route" class="form-control" placeholder="eg. CASTA6 GMN DUCKE BORDY BTG HAWKZ5">
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Cruise Alt</label>
                        <div class="col-md-9">
                            <input type="text" id="route" name="cruise" class="form-control" placeholder="35000">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="select">Type</label>
                        <div class="col-md-9">
                            <select id="type" name="type" class="form-control" size="1">
                                <option value="0">Please select</option>
                                <option value="1">Scheduled Passenger</option>
                                <option value="2">Scheduled Cargo</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-block">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>&nbsp; Submit</button>
                    <button type="reset" class="btn btn-danger"><i class="fa fa-ban"></i>&nbsp; Reset</button>
                </div>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>