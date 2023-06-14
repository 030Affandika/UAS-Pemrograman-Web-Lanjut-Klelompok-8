<?php $__env->startSection('container'); ?>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Karyamu</h1>
        </div>

        <div class="col-lg-8">
              <?php if( session()->has('success')): ?>
                   <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo e(session('success')); ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  
              <?php endif; ?>

              <?php if( session()->has('danger')): ?>
                   <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo e(session('danger')); ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  
              <?php endif; ?>

        </div>


        <div class="table-responsive col-lg-8">
            <a href="/dashboard/posts/create" class="btn btn-primary mb-3"> Upload Tulisanmu</a>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>

                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                    <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($post->title); ?></td>
                    <td><?php echo e($post->category->name); ?></td>
                    <td>
                        <a href="/dashboard/posts/<?php echo e($post->slug); ?>" class="badge bg-info"><span data-feather="eye"></span></a>
                        <a href="/dashboard/posts/<?php echo e($post->slug); ?>/edit" class="badge bg-warning"><span data-feather="edit"></span></a>

                        <form action="/dashboard/posts/<?php echo e($post->slug); ?>" method="post" class="d-inline">
                          <?php echo csrf_field(); ?>
                          <?php echo method_field('delete'); ?>

                            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"> <span data-feather="x-circle"></span></button>

                        </form>
                        
                    </td>
                    
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </tbody>
            </table>
        </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webBlog3\resources\views/dashboard/posts/index.blade.php ENDPATH**/ ?>