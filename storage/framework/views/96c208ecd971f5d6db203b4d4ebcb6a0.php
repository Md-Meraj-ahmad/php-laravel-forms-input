

<?php $__env->startSection('content'); ?>
    <h1>Create Blog</h1>

    <form action="<?php echo e(route('blogs.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>

        <label for="content">Content:</label>
        <textarea name="content" id="content" required></textarea>

        <label for="slug">Slug:</label>
        <input type="text" name="slug" id="slug" required>

        <button type="submit">Create Blog</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Md Meraj Ahmad\Desktop\Laravel\myapp\resources\views/blogs/create.blade.php ENDPATH**/ ?>