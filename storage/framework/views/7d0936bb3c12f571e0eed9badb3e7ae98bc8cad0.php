<div class="container-scroller" >

    <nav class="sidebar sidebar-offcanvas" id="sidebar" >
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top" style="background-color:red">
        <p class="sidebar-brand brand-logo" style="color:whitesmoke">Admin Page</p>
        <a class="sidebar-brand brand-logo-mini" href=""><img src="assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <ul class="nav">
        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="<?php echo e(url('/users')); ?>">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Users</span>
          </a>
        </li>
        
        <li class="nav-item menu-items">
          <a class="nav-link" href="<?php echo e(url('/foodmenu')); ?>">
            <span class="menu-icon">
              <i class="mdi mdi-playlist-play"></i>
            </span>
            <span class="menu-title">FoodMenu</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="<?php echo e(url('/viewchef')); ?>">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Chefs</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="<?php echo e(url('/viewreservation')); ?>">
            <span class="menu-icon">
              <i class="mdi mdi-chart-bar"></i>
            </span>
            <span class="menu-title">Reservations</span>
          </a>
        </li>
       
        <li class="nav-item menu-items">
          <a class="nav-link" href="<?php echo e(url('/orders')); ?>">
            <span class="menu-icon">
              <i class="mdi mdi-chart-bar"></i>
            </span>
            <span class="menu-title">Orders</span>
          </a>
        </li>
      </ul>
    </nav>
   
        <!-- partial -->
      </div><?php /**PATH C:\xampp\htdocs\food-delivery\resources\views/admin/navbar.blade.php ENDPATH**/ ?>