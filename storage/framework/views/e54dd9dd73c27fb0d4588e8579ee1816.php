<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Register</title> 
</head> 
<body> 
    <form action="<?php echo e(route('register')); ?>" method="POST"> 
        <?php echo csrf_field(); ?> 
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>" required> 
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
        </div>
        <div> 
            <label for="email">Email</label> 
            <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>" required> 
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
        </div> 
        <div> 
            <label for="password">Password</label> 
            <input type="password" name="password" id="password" required> 
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
        </div> 
        <div> 
            <label for="password_confirmation">Confirm Password</label> 
            <input type="password" name="password_confirmation" id="password_confirmation" required> 
        </div> 
        <button type="submit">Register</button> 
    </form> 
</body> 
</html><?php /**PATH C:\Users\Md Meraj Ahmad\Desktop\Laravel\myapp\resources\views/register.blade.php ENDPATH**/ ?>