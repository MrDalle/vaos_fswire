<?php $__env->startSection('head'); ?>
    <link href="<?php echo e(URL::asset('https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('/crewops/vendor/datatables-responsive/dataTables.responsive.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item"><a href="<?php echo e(url('admin/')); ?>">Admin</a>
    </li>
    <li class="breadcrumb-item active">Airlines</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Airline Table
            </div>
            <div class="card-block">

                <?php if(session('airline_created')): ?>
                    <div class="alert alert-success">Airline successfully created.</div>
                <?php elseif(session('airline_updated')): ?>
                    <div class="alert alert-success">Airline successfully updated.</div>
                <?php endif; ?>

                <div class="card-block">
                    <a href="<?php echo e(url('admin/airlines/create')); ?>" role="button" class="button btn btn-primary"><i class="fa fa-plus"></i>&nbsp; New Airline</a>
                </div>

                <table id="table_id" class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>ICAO</th>
                        <th>IATA</th>
                        <th>Callsign</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $airlines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tr>
                            <td><?php echo e($a->id); ?></td>
                            <td><?php echo e($a->name); ?></td>
                            <td><?php echo e($a->icao); ?></td>
                            <?php if($a->iata != null): ?>
                                <td><?php echo e($a->iata); ?></td>
                            <?php else: ?>
                                <td>N/A</td>
                            <?php endif; ?>
                            <td><?php echo e($a->callsign); ?></td>
                            <td>
                                <a href="<?php echo e(url('admin/airlines/'.$a->id.'/edit')); ?>" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </tbody>
                </table>

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
            $(".clickable-row").click(function() {
                window.document.location = $(this).data("href");
            });
        } );
    </script>
    <script src="<?php echo e(URL::asset('/crewops/vendor/datatables/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/crewops/vendor/datatables-plugins/dataTables.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/crewops/vendor/datatables-responsive/dataTables.responsive.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>