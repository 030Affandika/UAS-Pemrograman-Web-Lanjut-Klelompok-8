<?php $__env->startSection('container'); ?>

<div class="row">

    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
    <div class="col-md-4">
        <a href="/categories/<?php echo e($cat->slug); ?>">
        <div class="card bg-dark text-white">
            <img src="https://source.unsplash.com/500x500?<?php echo e($cat->name); ?>" class="card-img-top" alt="<?php echo e($cat->name); ?>">
            <div class="card-img-overlay d-flex align-items-center p-0">
              <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)"><?php echo e($cat->name); ?></h5>                     
            </div>
          </div>

        </a>
    </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webBlog3\resources\views/category/categories.blade.php ENDPATH**/ ?>