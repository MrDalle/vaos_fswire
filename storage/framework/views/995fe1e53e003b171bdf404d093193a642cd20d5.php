<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item"><a href="<?php echo e(url('admin/')); ?>">Admin</a></li>
    <li class="breadcrumb-item"><a href="<?php echo e(url('admin/fleet')); ?>">Fleet</a></li>
    <li class="breadcrumb-item active">New Aircraft</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/admin/fleet')); ?>">
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
                                <?php if($airlines == "[]"): ?>
                                    <option value="0">No Airlines Found</option>
                                <?php else: ?>
                                    <?php $__currentLoopData = $airlines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($a->icao); ?>"><?php echo e($a->icao); ?> - <?php echo e($a->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">ICAO</label>
                        <div class="col-md-9">
                            <input type="text" id="icao" name="icao" class="form-control" placeholder="eg. B77W">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 form-control-label" for="text-input">Registration</label>
                        <div class="col-md-8">
                            <input type="text" id="registration" name="registration" class="form-control" placeholder="eg. N542JC">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-7 form-control-label" for="select">User Defined Aircraft Group</label>
                        <div class="col-md-5">
                            <select id="aircraft" name="group" class="form-control" size="1">
                                <option value="0">None</option>
                                <?php $__currentLoopData = $acfgroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acf): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($acf->id); ?>"><?php echo e($acf->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Aircraft Properties
                </div>
                <div class="card-block">
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Name</label>
                        <div class="col-md-9">
                            <input type="text" id="name" name="name" class="form-control" placeholder="eg. B777-300ER">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 form-control-label" for="text-input">Manufacturer</label>
                        <div class="col-md-8">
                            <input type="text" id="manufacturer" name="manufacturer" class="form-control" placeholder="eg. Boeing">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Range (NM)</label>
                        <div class="col-md-3">
                            <input type="text" id="range" name="range" class="form-control" placeholder="2675">
                        </div>
                        <label class="col-md-3 form-control-label" for="text-input">Max PAX</label>
                        <div class="col-md-3">
                            <input type="text" id="range" name="maxpax" class="form-control" placeholder="178">
                        </div>
                        <label class="col-md-3 form-control-label" for="text-input">Max GW (lbs)</label>
                        <div class="col-md-3">
                            <input type="text" id="range" name="maxgw" class="form-control" placeholder="178">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label"></label>
                        <div class="col-md-9">
                            <div class="checkbox">
                                <label for="checkbox1">
                                    <input type="checkbox" id="checkbox1" name="status" value="1"> Enabled
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-block">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>&nbsp; Submit</button>
                    <button type="reset" class="btn btn-danger"><i class="fa fa-ban"></i>&nbsp; Reset</button>
                </div>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('/resources/admin/js/MasterData.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>