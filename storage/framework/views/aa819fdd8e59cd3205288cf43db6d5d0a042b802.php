<?php $__env->startSection('head'); ?>
    <link href="<?php echo e(URL::asset('https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('/crewops/vendor/datatables-responsive/dataTables.responsive.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item"><a href="<?php echo e(url('admin/')); ?>">Admin</a>
    </li>
    <li class="breadcrumb-item active">Schedule</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Schedules Table
            </div>
            <div class="card-block">
                <div class="card-block">

                    <?php if(session('schedule_created')): ?>
                        <div class="alert alert-success">Route successfully created.</div>
                    <?php elseif(session('schedule_updated')): ?>
                        <div class="alert alert-success">Route successfully updated.</div>
                    <?php endif; ?>

                    <a href="<?php echo e(url('admin/schedule/create')); ?>" role="button" class="button btn btn-primary"><i class="fa fa-plus"></i>&nbsp; New Route</a>
                </div>
                <?php if($schedules == '[]'): ?>
                    <div class="alert alert-info" role="alert">
                        <strong>No Routes Found:</strong> The server returned no routes in the system.
                    </div>
                <?php else: ?>
                <table id="table_id" class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Airline Code</th>
                        <th>Flight Number</th>
                        <th>Departure</th>
                        <th>Arrival</th>
                        <th>Aircraft Group</th>
                        <th>Seasonal</th>
                        <th>Enabled</th>
                        <th>Type</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <tr>
                        <td><?php echo e($s->airline->icao); ?></td>
                        <td><?php echo e($s->flightnum); ?></td>
                        <td><?php echo e($s->depapt->icao); ?> - <?php echo e($s->depapt->name); ?></td>
                        <td><?php echo e($s->arrapt->icao); ?> - <?php echo e($s->arrapt->name); ?></td>
                        <?php if($s->aircraft_group == null): ?>
                        <td>Not Assigned</td>
                        <?php else: ?>
                            <td><?php echo e($s->aircraft_group->name); ?></td>
                        <?php endif; ?>
                        <?php if($s->seasonal == '1'): ?>
                            <td>Yes</td>
                        <?php else: ?>
                            <td>No</td>
                        <?php endif; ?>
                        <?php if($s->enabled == '1'): ?>
                            <td>Yes</td>
                        <?php else: ?>
                            <td>No</td>
                        <?php endif; ?>
                        <?php if($s->type == '1'): ?>
                            <td>Passenger</td>
                        <?php else: ?>
                            <td>Cargo</td>
                        <?php endif; ?>
                        <td>
                            <a href="<?php echo e(url('/admin/schedule/'.$s->id.'/edit')); ?>" class="btn btn-primary btn-sm">Edit</a>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                <a href="#" role="button" class="btn btn-danger" onclick="event.preventDefault();
                                        document.getElementById('delete-<?php echo e($s->id); ?>').submit();">Delete</a>
                            </div>
                            <form id="delete-<?php echo e($s->id); ?>" method="POST" action="<?php echo e(url('/admin/schedule/'.$s->id)); ?>" accept-charset="UTF-8" hidden>
                                <?php echo e(csrf_field()); ?>

                                <input name="_method" type="hidden" value="DELETE">
                            </form>
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
                window.document.location = $(this).data("href");
                return false;
            });
        } );
    </script>
    <script src="<?php echo e(URL::asset('/crewops/vendor/datatables/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/crewops/vendor/datatables-plugins/dataTables.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/crewops/vendor/datatables-responsive/dataTables.responsive.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>