

<?php $__env->startSection('content'); ?>
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>


        <div class="row mb-3">
            <div class="col-md-3">
                <a href="#" class="btn btn-success">Add New Course</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Courses</h5>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($from++); ?></td>
                                    <td><?php echo e($category->name); ?></td>
                                    <td><?php echo e($category->created_at); ?></td>
                                    <th class="d-none d-md-table-cell"><a href="" class="btn btn-success">View</a><a href="" class="btn btn-warning">Edit</a><a href="" class="btn btn-danger">Delete</a></th>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <?php echo e($categories->links('pagination::bootstrap-5')); ?>

            </div>
        </div>

    </div>
</main>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\larabatch3\elearning\resources\views/admin/category/index.blade.php ENDPATH**/ ?>