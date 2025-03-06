

<?php $__env->startSection('content'); ?>
    <h1>Edit Blog</h1>

    <form action="<?php echo e(route('blogs.update', $blog->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="<?php echo e($blog->title); ?>" required>

        <label for="content">Content:</label>
        <textarea name="content" id="content" required><?php echo e($blog->content); ?></textarea>

        <label for="slug">Slug:</label>
        <input type="text" name="slug" id="slug" value="<?php echo e($blog->slug); ?>" required>

        <button type="submit">Update Blog</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Md Meraj Ahmad\Desktop\Laravel\myapp\resources\views/blogs/edit.blade.php ENDPATH**/ ?>