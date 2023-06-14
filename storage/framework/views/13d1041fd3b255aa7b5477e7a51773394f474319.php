<?php $__env->startSection('container'); ?>

<div class="row">
    <div class="col-md-8">
        <h1 class="mb-3"><?php echo e($post->title); ?></h1>
        <p>By. <a href="/authors/<?php echo e($post->author->username); ?>"><?php echo e($post->author->name); ?></a> in <a href="/categories/<?php echo e($post->category->slug); ?>"><?php echo e($post->category->name); ?></a></p>
        <?php if($post->image): ?>
                            
                <img src="<?php echo e(asset('storage/'. $post->image)); ?>" class="card-img-top" alt="<?php echo e($post->category->name); ?>">
        <?php else: ?>
            
                <img src="https://source.unsplash.com/500x400?<?php echo e($post->category->name); ?>" class="card-img-top" alt="<?php echo e($post->category->name); ?>">
        <?php endif; ?>
        
        <article class="my-3 fs-5">
            <p><?php echo $post->body; ?></p>

           </article>
           
        <a href="/posts" class="text-decoration-none">Back to posts</a>

    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webBlog3\resources\views/post/post.blade.php ENDPATH**/ ?>