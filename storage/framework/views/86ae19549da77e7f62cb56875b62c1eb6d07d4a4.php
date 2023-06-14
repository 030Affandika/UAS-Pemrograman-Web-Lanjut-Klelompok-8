<?php $__env->startSection('container'); ?>
    
<div class="row my-3">
    <div class="col-lg-8 ">
    <h1 class="mb-3"><?php echo e($post->title); ?></h1>
    <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali</a>
    <a href="/dashboard/posts/<?php echo e($post->slug); ?>/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
     
    <form action="/dashboard/posts/<?php echo e($post->slug); ?>" method="post" class="d-inline">
        <?php echo method_field('delete'); ?>
        <?php echo csrf_field(); ?>
          <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Hapus</button>
    </form>

    <?php if($post->image): ?>
        
        <img src="<?php echo e(asset('storage/'.$post->image)); ?>" class="card-img-top mt-3" alt="<?php echo e($post->category->name); ?>">
    <?php else: ?>
        
        <img src="https://source.unsplash.com/500x400?<?php echo e($post->category->name); ?>" class="card-img-top mt-3" alt="<?php echo e($post->category->name); ?>">
    <?php endif; ?>
    <article class="my-3 fs-5"> 
     <p><?php echo $post->body; ?></p>

    </article>
    

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webBlog3\resources\views/dashboard/posts/show.blade.php ENDPATH**/ ?>