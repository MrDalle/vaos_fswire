<?php $__env->startSection('head'); ?>
    <link href="<?php echo e(URL::asset('https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('/crewops/vendor/datatables-responsive/dataTables.responsive.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item"><a href="<?php echo e(url('admin/')); ?>">Admin</a>
    </li>
    <li class="breadcrumb-item active">Fleet</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Aircraft Table
            </div>
            <div class="card-block">
                <div class="card-block">

                    <?php if(session('aircraft_created')): ?>   
                        <div class="alert alert-success">Aircraft successfully created.</div>
                    <?php elseif(session('aircraft_updated')): ?>
                        <div class="alert alert-success">Aircraft successfully updated.</div>
                    <?php endif; ?>

                    <a href="<?php echo e(url('admin/fleet/create')); ?>" role="button" class="button btn btn-primary"><i class="fa fa-plus"></i>&nbsp; New Aircraft</a>
                </div>
                <?php if($fleet == '[]'): ?>
                    <div class="alert alert-info" role="alert">
                        <strong>No Airplanes Found:</strong> The server returned no airplanes in the system.
                    </div>
                <?php else: ?>
                    <table id="table_id" class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Airline</th>
                            <th>ICAO</th>
                            <th>Manufacturer</th>
                            <th>Model Name</th>
                            <th>Registration</th>
                            <th>Hub</th>
                            <th>Location</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $fleet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <tr>
                                <?php if($a->airline != null): ?>
                                    <td><?php echo e($a->airline->icao); ?></td>
                                <?php else: ?>
                                    <td>N/A</td>
                                <?php endif; ?>
                                <td><?php echo e($a->icao); ?></td>
                                <td><?php echo e($a->manufacturer); ?></td>
                                <td><?php echo e($a->name); ?></td>
                                <td><?php echo e($a->registration); ?></td>
                                <?php if($a->hub == null): ?>
                                    <td>Not Assigned</td>
                                <?php else: ?>
                                    <td><?php echo e($a->hub->icao); ?></td>
                                <?php endif; ?>
                                <?php if($a->location == null): ?>
                                    <td>N/A</td>
                                <?php else: ?>
                                    <td><?php echo e($a->location->icao); ?></td>
                                <?php endif; ?>

                                <td>
                                    <a href="<?php echo e(url('/admin/fleet/'.$a->id.'/edit')); ?>" class="btn btn-primary btn-sm">Edit</a>
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#table_id').DataTable( {
                responsive: true,
                "autoWidth": false
            });
            /*
            $(".clickable-row").click(function() {
                window.document.location = $(this).data("href");
            });
            */
            $(".clickable-row").click(function() {
                return false;
            }).dblclick(function() {
                window.document.location = this.href;
                return false;
            });
        });
    </script>
    <script src="<?php echo e(URL::asset('/crewops/vendor/datatables/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/crewops/vendor/datatables-plugins/dataTables.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/crewops/vendor/datatables-responsive/dataTables.responsive.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>