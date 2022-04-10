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
    <div class="container-scroller" align="center" >
    
       <?php echo $__env->make("admin.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

       <form action="<?php echo e(url('/uploadchef')); ?>" method="post" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>

        <div  style="padding: 20px;">
            <label>Name</label>
            <input style="color:blue;" type="text" name="name" required="" placeholder="Enter the name">
        </div>

        <div  style="padding: 20px;">
            <label>Speciality</label>
            <input style="color:blue;" type="text" name="Speciality" required="" placeholder="Enter the Speciality">
        </div>

        <div  style="padding: 20px;">
            
            <input  name="image"  type="file" required="" >
        </div>

        <div >
            <button class="btn btn-success"><input  type="submit" value="Upload"></button>
        </div>
       </form>

       <div>

        <table bgcolor="black">
            <tr bgcolor="#FF5733" style="padding:30px;border:3px solid white">
            <th style="padding:30px">Chef Name</th>
            <th style="padding:30px">Speciality</th>
            <th style="padding:30px">Image</th>
            <th style="padding:30px">Update</th>
            <th style="padding:30px">Delete</th>
            </tr>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr align="center" style="padding:30px;border:3px solid white">
                 <td style="padding:30px;border:1px solid white"><?php echo e($data->name); ?></td>
                 <td style="padding:30px;border:1px solid white"><?php echo e($data->Speciality); ?></td>
                 <td style="padding:30px;border:1px solid white"><img height="200" width="200" src="/chefimage/<?php echo e($data->image); ?>"></td>
                 <td style="padding:30px;border:1px solid white"><a   class="btn btn-warning" href="<?php echo e(url('/updatechef',$data->id)); ?>">Update</a></td> 
                 <td style="padding:30px;border:1px solid white"><a  class="btn btn-info" href="<?php echo e(url('/deletechef',$data->id)); ?>">Delete</a></td> 
             </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </table>
        <br/>
        <br/>
        <br/>
    </div>

    </div>
       <?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  </body>
</html><?php /**PATH C:\xampp\htdocs\food-delivery\resources\views/admin/adminchef.blade.php ENDPATH**/ ?>