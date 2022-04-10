<!DOCTYPE html>
<head>
    <title>Users</title>
</head>
<body>
    <?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <?php echo $__env->make("admin.admincss", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
      </head>
      <body>
        <div class="container-scroller" style="background-color:black">
        
           <?php echo $__env->make("admin.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
           
           <div style="position: relative; top:60px; right:-150px">
            <?php if(session()->has('message')): ?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <?php echo e(session()->get('message')); ?>

            </div>
            <?php endif; ?>

            <table style="border:5px solid white">
                <tr align="center " bgcolor="green">
                    <th style="padding:30px;border:3px solid white">Name</th>
                    <th style="padding:30px;border:3px solid white">Email</th>
                    <th style="padding:30px;border:3px solid white">Action</th>
                </tr>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr align="center">
                    <td style="padding: 30px;border:2px solid white"><?php echo e($data->name); ?></td>
                    <td style="padding: 30px;border:2px solid white"><?php echo e($data->email); ?></td>

                    <?php if($data->usertype=="0"): ?>
                    <td style="padding: 30px;border:2px solid white"><a class="btn btn-warning" href="<?php echo e(url('/deleteuser',$data->id)); ?>">Delete</a></td>
                    <?php else: ?>
                    <td style="padding: 30px;border:2px solid white"><a>Admin Cant be Allowed to delete</a></td>
                    <?php endif; ?>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
           </div>
        </div>
    
           <?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    
      </body>
    </html>
</body>
</html><?php /**PATH C:\xampp\htdocs\food-delivery\resources\views/admin/users.blade.php ENDPATH**/ ?>