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
      <base href="/public">
    <?php echo $__env->make("admin.admincss", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </head>
  <body>
    <div class="container-scroller">
       <?php echo $__env->make("admin.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <div style="position: relative; top:60px; right:-150px">
        <form action="<?php echo e(url('/update',$data->id)); ?>" method="post" enctype="multipart/form-data">
             <?php echo csrf_field(); ?>
            <div>
                <label>Title</label>
                <input style="color:blue" type="text" name="Title" value="<?php echo e($data->Title); ?>" required>
            </div> 
            <div>
                <label>Price</label>
                <input style="color:blue" type="num" name="Price"  value="<?php echo e($data->Price); ?>"   required>
            </div> 
        
            <div>
                <label>Description</label>
                <input style="color:blue" type="text" name="Description" value="<?php echo e($data->Description); ?>"  required>
            </div> 

            <div>
                <label>Old Image</label>
                <img height="200" width="200" src="/foodimage/<?php echo e($data->Image); ?>">
            </div>
            <div>
                <label>New Image</label>
                <input style="color:blue" type="file" name="Image"  required>
            </div>  
            <div>
              
                <button><input style="color:black;background-color:azure" type="submit" value="Save"></button>
            </div> 
        </form>

      <div>
    </div>
       <?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  </body>
</html><?php /**PATH C:\xampp\htdocs\food-delivery\resources\views/admin/updateview.blade.php ENDPATH**/ ?>