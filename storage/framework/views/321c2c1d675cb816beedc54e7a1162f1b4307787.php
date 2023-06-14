<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1363DF">
    <div class="container">
      <a class="navbar-brand" href="/">Meraki</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('posts')? 'active' : ''); ?>" href="/posts">Blog</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('categories')? 'active' : ''); ?>" href="/categories">Kategori</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('about')? 'active' : ''); ?>" href="/about">Tentang</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          <?php if(auth()->guard()->check()): ?>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Selamat Datang <?php echo e(auth()->user()->name); ?>

            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a></li>              
              <li><hr class="dropdown-divider"></li>
              <form action="/logout" method="post">
                  <?php echo csrf_field(); ?>
                <button class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> Keluar</button>
              </form>
            </ul>
          </li>
          <?php else: ?>

              <li class="nav-item">
                <a href="/login" class="nav-link <?php echo e(Request::is('login')? 'active' : ''); ?>"><i class="bi bi-box-arrow-in-right"></i> Login</a>
              </li>
          <?php endif; ?>

        </ul>
      </div>
    </div>
  </nav>
<?php /**PATH C:\xampp\htdocs\webBlog3\resources\views/partials/navbar.blade.php ENDPATH**/ ?>