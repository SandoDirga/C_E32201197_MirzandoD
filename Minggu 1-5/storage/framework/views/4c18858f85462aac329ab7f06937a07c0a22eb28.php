<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_','-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width==device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e(config('app.name')); ?></title>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div classs="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\E32201197_Mirzando\BelajarLaravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>