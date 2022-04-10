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
    <div style="position: relative; top:60px; right:-100px">

      <table  >
         <tr bgcolor=" #8E44AD " style="padding:30px;border:3px solid white">
             <th style="padding:30px;border:3px solid white">Name</th>
             <th style="padding:30px;border:3px solid white">Email</th>
             <th style="padding:30px;border:3px solid white">Phone</th>
             <th style="padding:30px;border:3px solid white">No. of Guests</th>
             <th style="padding:30px;border:3px solid white">Time</th>
             <th style="padding:30px;border:3px solid white">Date</th>
             <th style="padding:30px;border:3px solid white">Message</th>

         </tr>
         <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr align="center" style="padding:30px;border:3px">
             <td style="padding: 30px;border:1px solid white"><?php echo e($data->name); ?></td>
             <td style="padding: 30px;border:1px solid white"><?php echo e($data->email); ?></td>
             <td style="padding: 30px;border:1px solid white"><?php echo e($data->phone); ?></td>
             <td style="padding: 30px;border:1px solid white" ><?php echo e($data->guest); ?></td>
             <td style="padding: 30px;border:1px solid white"><?php echo e($data->time); ?></td>
             <td style="padding: 30px;border:1px solid white"><?php echo e($data->date); ?></td>
             <td style="padding: 30px;border:1px solid white"><?php echo e($data->message); ?></td>
             
         </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


      </table>

    </div>


    </div>
       <?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  </body>
</html><?php /**PATH C:\xampp\htdocs\food-delivery\resources\views/admin/adminreservation.blade.php ENDPATH**/ ?>