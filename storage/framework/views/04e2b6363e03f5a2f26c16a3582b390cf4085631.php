

<?php $__env->startSection('content'); ?>
<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

		<div class="row mb-3">
            <div class="col-md-3">
                 <a href="#" class="btn btn-success"> Add New Course</a>
            </div>
        </div>

		

		<div class="row">
			<div class="col-12 col-lg-12 col-xxl-12 d-flex">
				<div class="card flex-fill">
					<div class="card-header">

						<h5 class="card-title mb-0">Courses</h5>
					</div>
					<table class="table table-hover my-0">
						<thead>
							<tr>
                                <th>No</th>
								<th>Name</th>
								<th class="d-none d-xl-table-cell">Category</th>
								<th class="d-none d-xl-table-cell">Duration</th>
								<th>Hours</th>
								<th class="d-none d-md-table-cell">Lessons</th>
                                <th class="d-none d-md-table-cell">Fee</th>
                                <th class="d-none d-md-table-cell">Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($from++); ?></td>
								<td><?php echo e($course->title); ?></td>
								<td class="d-none d-xl-table-cell"><?php echo e($course->category->name); ?></td>
								<td class="d-none d-xl-table-cell"><?php echo e($course->duration); ?></td>
								<td><span class="badge bg-warning"><?php echo e($course->hours); ?></span></td>
								<td class="d-none d-md-table-cell"><span class="badge bg-warning"><?php echo e($course->total_topics); ?></span></td>
                                <td class="d-none d-md-table-cell"><?php echo e($course->fee); ?></td>
                                <td class="d-none d-md-table-cell"> <a href="" class='btn btn-success'>View</a> <a href="" class='btn btn-warning'>Edit</a> <a href="" class='btn btn-danger'>Delete</a> </td>
							</tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
						</tbody>
					</table>
                   
				</div>
               
			</div>
			
		</div>
        <div class="row">
            <div class="col-md-12">
               
                <?php echo e($courses->links('pagination::bootstrap-5')); ?>

            </div>
        </div>
       

	</div>
</main>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\larabatch3\elearning\resources\views/admin/course/index.blade.php ENDPATH**/ ?>