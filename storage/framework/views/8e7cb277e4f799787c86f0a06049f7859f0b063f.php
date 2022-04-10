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
    <div class="container-scroller">
    
       <?php echo $__env->make("admin.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <div class="container">

       <form action="<?php echo e(url('/search')); ?>" method="get">
        <?php echo csrf_field(); ?>
         <input type="text" name="search" style="color:blue">
         <input type="submit" value="Search" class="btn btn-success" style="margin-bottom:90px;margin-top:90px;padding:10px;margin-left:20px">
       </form>

       

       <table align="center">
           <tr align="center" style="background-color:blue;border:3px solid white">
            <td style="padding:30px">Name</td>
            <td style="padding:30px">Phone</td>
            <td style="padding:30px">Address</td>
            <td style="padding:30px">FoodName</td>
            <td style="padding:30px">Price</td>
            <td style="padding:30px">Quantity</td>
            <td style="padding:30px">Total Price</td>
            <td style="padding:30px">Status</td>
            <td style="padding:30px">Action</td>
            
           </tr>
           <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <tr align="center" style="background-color: black;border:3px solid white">
              <td style="padding:30px"><?php echo e($data->name); ?></td>
              <td style="padding:30px"><?php echo e($data->phone); ?></td>
              <td style="padding:30px"><?php echo e($data->address); ?></td>
              <td style="padding:30px"><?php echo e($data->foodname); ?></td>
              <td style="padding:30px"><?php echo e($data->price); ?></td>
              <td style="padding:30px"><?php echo e($data->quantity); ?></td>
              <td style="padding:30px"><?php echo e($data->price*$data->quantity); ?></td>
              <td style="padding:30px"><?php echo e($data->status); ?></td>
              <td>
                <a class="btn btn-success" href="<?php echo e(url('updatestatus',$data->id)); ?>">Delivered</a>
           </td>
              <td>

                
           </td>
              

           </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </table>
    </div>
    </div>
       <?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  </body>
</html><?php /**PATH C:\xampp\htdocs\food-delivery\resources\views/admin/orders.blade.php ENDPATH**/ ?>