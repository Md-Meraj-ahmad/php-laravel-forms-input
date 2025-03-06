

<?php $__env->startSection('content'); ?>
    <h1><?php echo e($blog->title); ?></h1>
    <p><?php echo e($blog->content); ?></p>
    <a href="<?php echo e(route('blogs.index')); ?>">Back to all blogs</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Md Meraj Ahmad\Desktop\Laravel\myapp\resources\views/blogs/show.blade.php ENDPATH**/ ?>