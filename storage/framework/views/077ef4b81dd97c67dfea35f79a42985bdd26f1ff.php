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
    <style>
        label{
            display: inline-block;
            width:200px;
        }
        </style>

  </head>
  <body>
    <div class="container-scroller" style="background-color:black">
       <?php echo $__env->make("admin.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       
    <div style="position: relative; top:60px; right:-150px" align="center">
        <?php if(session()->has('message')): ?>
    <div class="alert alert-success">
        
        <?php echo e(session()->get('message')); ?>

    </div>
    <?php endif; ?>
        <h1 style="color:whitesmoke">Upload new food items</h1>
        <form action="<?php echo e(url('/uploadfood')); ?>" method="post" enctype="multipart/form-data">
             <?php echo csrf_field(); ?>
            <div>
                <label style="padding: 20px;">Title</label>
                <input style="color:blue" type="text" name="Title" placeholder="write a title here " required>
            </div> 
            <div style="padding: 20px;">
                <label>Price</label>
                <input style="color:blue;" type="num" name="Price" placeholder="Price " required>
            </div> 
            <div style="padding: 20px;">
                <label>Description</label>
                <input style="color:blue" type="text" name="Description" placeholder="Description" required>
            </div> 
            <div style="padding: 20px;">
                <label >Image</label>
                <input style="color:blue;" type="file" name="Image"  required>
            </div> 
        
            <div >
              
                <button class="btn btn-success"><input style="font-size:20px" type="submit" value="Save"></button>
            </div> 
        </form>
        <br/>
        <br/>

      <div>
      

          <table bgcolor="black">
              <tr bgcolor="#3498DB" style="padding:30px;border:3px solid white" >
              <th style="padding:30px">Food Item Name</th>
              <th style="padding:30px">Price</th>
              <th style="padding:30px">Description</th>
              <th style="padding:30px">Image</th>
              <th style="padding:30px">Deleteitem</th>
              <th style="padding:30px">Updateitem</th>
              </tr>
              <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr align="center" style="padding:30px;border:3px solid white">
                   <td ><?php echo e($data->Title); ?></td>
                   <td><?php echo e($data->Price); ?></td>
                   <td><?php echo e($data->Description); ?></td>
                   <td><img height="200" width="200" src="/foodimage/<?php echo e($data->Image); ?>"></td>
                   <td><a  class="btn btn-warning" href="<?php echo e(url('/deleteitem',$data->id)); ?>">Delete</a></td>
                   <td><a class="btn btn-info"  href="<?php echo e(url('/updateview',$data->id)); ?>">Update</a></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </table>
          <br/>
          <br/>
          <br/>
      </div>

    </div>

    </div>

       <?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  </body>
</html><?php /**PATH C:\xampp\htdocs\food-delivery\resources\views/admin/foodmenu.blade.php ENDPATH**/ ?>