

<?php $__env->startSection('content'); ?>
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>


        <div class="row mb-3">
            <div class="col-md-3">
                <a href="<?php echo e(route('courses.index')); ?>" class="btn btn-success">Back</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Courses</h5>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('courses.update',$course->id)); ?>" method="post" >
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>
                            <div class="row my-3">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Title</label>
                                    <input type="text" name="title" id="" class="form-control" value="<?php echo e($course->title); ?>">
                                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"> <?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Category</label>
                                    <select name="category_id" id="" class="form-select">
                                        <option value="">Choose course category</option>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($category->id==$course->category_id): ?>
                                            <option value="<?php echo e($category->id); ?>" selected><?php echo e($category->name); ?></option>
                                                                                           
                                            <?php else: ?>
                                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option> 
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Description</label>
                                    <input type="text" name="description" id="" class="form-control" value="<?php echo e($course->description); ?>">
                                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"> <?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                
                            </div>
                            <div class="row my-3">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Duration</label>
                                    <input type="text" name="duration" id="" class="form-control" value="<?php echo e($course->duration); ?>">
                                    <?php $__errorArgs = ['duration'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"> <?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">OJT Duration</label>
                                    <input type="text" name="ojt_duration" id="" class="form-control" value="<?php echo e($course->ojt_duration); ?>">
                                    <?php $__errorArgs = ['ojt_duration'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"> <?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Total Topics</label>
                                    <input type="number" name="total_topics" id="" class="form-control" value="<?php echo e($course->total_topics); ?>">
                                    <?php $__errorArgs = ['total_topics'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"> <?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                
                            </div>
                            <div class="row my-3">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Hours</label>
                                    <input type="number" name="hours" id="" class="form-control" value="<?php echo e($course->hours); ?>">
                                    <?php $__errorArgs = ['hours'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"> <?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Fee</label>
                                    <input type="number" name="fee" id="" class="form-control" value="<?php echo e($course->fee); ?>">
                                    <?php $__errorArgs = ['fee'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"> <?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Discount</label>
                                    <input type="number" name="discount" id="" class="form-control" value="<?php echo e($course->discount); ?>">
                                    <?php $__errorArgs = ['discount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"> <?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                
                            </div>
                            <div class="row my-3">
                                <div class="col-md-12">
                                    <label for="" class="form-label">Learning Outcome</label>
                                    <textarea name="learing_outcome" id="" cols="30" rows="10" class="form-control" ><?php echo e($course->learing_outcome); ?></textarea>
                                    <?php $__errorArgs = ['learing_outcome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"> <?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-12">
                                    <button class='btn btn-success'> Update </button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
       

    </div>
</main>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\larabatch3\elearning\resources\views/admin/course/edit.blade.php ENDPATH**/ ?>