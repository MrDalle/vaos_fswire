<?php $__env->startSection('head'); ?>
    <link href="<?php echo e(URL::asset('/crewops/vendor/datatables-plugins/dataTables.bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('/crewops/vendor/datatables-responsive/dataTables.responsive.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">My Logbook</h1>
        </div>
    </div>
    <div class="row">
            <div class="col-lg-9 col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <table id="table_id" class="table table-striped table-bordered table-hover table-responsive">
                            <thead>
                            <tr>
                                <th>Airline</th>
                                <th>Flight</th>
                                <th>Departure</th>
                                <th>Arrival</th>
                                <th>Aircraft</th>
                                <th>Approved</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $pireps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <tr>
                                    <td><?php echo e($p->airline->icao); ?></td>
                                    <td><?php echo e($p->flightnum); ?></td>
                                    <td><?php echo e($p->depapt->icao); ?></td>
                                    <td><?php echo e($p->arrapt->icao); ?></td>
                                    <td><?php echo e($p->aircraft->name); ?> (<?php echo e($p->aircraft->registration); ?>)</td>
                                    <?php if($p->status === 1): ?>
                                        <td>Approved</td>
                                    <?php elseif($p->status === 2): ?>
                                        <td>Denied</td>
                                    <?php else: ?>
                                        <td>Pending</td>
                                    <?php endif; ?>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#table_id').DataTable( {
                responsive: true
            });
        } );
    </script>
    <script src="<?php echo e(URL::asset('/crewops/vendor/datatables/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/crewops/vendor/datatables-plugins/dataTables.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/crewops/vendor/datatables-responsive/dataTables.responsive.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.crewops', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>