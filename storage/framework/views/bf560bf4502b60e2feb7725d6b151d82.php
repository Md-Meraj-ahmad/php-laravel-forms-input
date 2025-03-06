

<?php $__env->startSection('content'); ?>
    <h1>All Blogs</h1>
    <a href="<?php echo e(route('blogs.create')); ?>">Create New Blog</a>

    <ul>
        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php echo e(route('blogs.show', $blog->id)); ?>"><?php echo e($blog->title); ?></a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Md Meraj Ahmad\Desktop\Laravel\myapp\resources\views/blogs/index.blade.php ENDPATH**/ ?>