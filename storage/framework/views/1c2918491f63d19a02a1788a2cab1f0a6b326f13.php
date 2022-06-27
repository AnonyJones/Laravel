<h1>Information</h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>EMAIL</td>
        <td>PASSWORD</td>
        <td>Created_at</td>
        <td>Updated_at</td>
        <td>Action</td>
      
</tr>
 <?php $__currentLoopData = $query; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $querys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    
        <td><?php echo e($querys->id); ?></td>
        <td><?php echo e($querys->name); ?></td>
        <td><?php echo e($querys->email); ?></td>
        <td><?php echo e($querys->password); ?></td>
        <td><?php echo e($querys->created_at); ?></td>
        <td><?php echo e($users->updated_at); ?></td>
        <td align='center'><a style='text-decoration:none;' href="<?php echo e(url('delete')); ?>">X</a></td>
        <td align='center'><a style='text-decoration:none;' href='update-process.php/?id=$users[number]'>UPDATE</a></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</table>

<a href="<?php echo e(url('/')); ?>">Click to go back</a><?php /**PATH C:\xampp\htdocs\finalwebproj\resources\views/update.blade.php ENDPATH**/ ?>