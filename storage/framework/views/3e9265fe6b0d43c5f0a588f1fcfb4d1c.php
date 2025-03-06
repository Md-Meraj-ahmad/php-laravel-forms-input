<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Application</title>
</head>
<body>
    <header>
        <h1>My Blog</h1>
        <nav>
            <ul>
                <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                <li><a href="<?php echo e(route('blogs.index')); ?>">Blogs</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
        <p>&copy; 2025 My Blog</p>
    </footer>
</body>
</html>
<?php /**PATH C:\Users\Md Meraj Ahmad\Desktop\Laravel\myapp\resources\views/layouts/app.blade.php ENDPATH**/ ?>