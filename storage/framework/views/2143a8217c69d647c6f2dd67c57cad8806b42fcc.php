<?php $__env->startSection('container'); ?>

<h1 class="mb-5 text-center"><?php echo e($title); ?></h1>

<?php if($posts->count()): ?>
    
      <div class="card mb-3">
        <?php if($posts[0]->image): ?>
        <div style="max-height: 450px; overflow: hidden;">
            <img src="<?php echo e(asset('storage/'. $posts[0]->image)); ?>" class="card-img-top" alt="<?php echo e($posts[0]->category->name); ?>">
        </div>
        <?php else: ?>
            
            <img src="https://source.unsplash.com/1200x400?<?php echo e($posts[0]->category->name); ?>" class="card-img-top" alt="<?php echo e($posts[0]->category->name); ?>">
        
        <?php endif; ?>

        <div class="card-body text-center">
          <h3 class="card-title"><a href="/post/<?php echo e($posts[0]->slug); ?>" class="text-decoration-none text-dark"><?php echo e($posts[0]->title); ?></a></h3>
            <small class="text-muted"> <p>By. <a href="/authors/<?php echo e($posts[0]->author->username); ?>"><?php echo e($posts[0]->author->name); ?></a> in <a href="/categories/<?php echo e($posts[0]->category->slug); ?>"><?php echo e($posts[0]->category->name); ?></a>  </p></small>
            <p class="card-text"><?php echo e($posts[0]->excerpt); ?></p>
            

            <a href="/post/<?php echo e($posts[0]->slug); ?>" class="text-decoration-none btn btn-primary">Read more</a>
        </div>
      </div>


      <div class="row">

      <?php $__currentLoopData = $posts->skip(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="position-absolute px-3 py-2" style="background-color:rgba(0,0,0,0.7) "><a href="/categories/<?php echo e($post->category->slug); ?>" class="text-decoration-none text-white"><?php echo e($post->category->name); ?></a></div>
          <?php if($post->image): ?>      
              
                <img src="<?php echo e(asset('storage/'. $post->image)); ?>" class="card-img-top" alt="<?php echo e($post->category->name); ?>">
          <?php else: ?>
              
                <img src="https://source.unsplash.com/500x400?<?php echo e($post->category->name); ?>" class="card-img-top" alt="<?php echo e($post->category->name); ?>">
          <?php endif; ?>
          
          <div class="card-body">
            <h5 class="card-title"><?php echo e($post->title); ?></h5>
            <small class="text-muted"> <p>By. <a href="/authors/<?php echo e($post->author->username); ?>"><?php echo e($post->author->name); ?></a> <?php echo e($post->created_at->diffForHumans()); ?> </p></small>
            <p class="card-text"><?php echo e($post->excerpt); ?></p>
            <a href="/post/<?php echo e($post->slug); ?>" class="btn btn-primary">Read more...</a>
          </div>
        </div>
    </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     


      </div> <!-- end row -->



<?php else: ?>
    <p class="text-center fs-4">No post found.</p>
<?php endif; ?>
    

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webBlog3\resources\views/post/posts.blade.php ENDPATH**/ ?>