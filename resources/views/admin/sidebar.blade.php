<link rel="stylesheet" href="{{asset('resources/database/css/jquery.dataTables.min.css')}}" type="text/css"/>
<link rel="stylesheet" href="{{asset('resources/database/js/jquery.dataTables.min.js')}}" type="text/css"/>
<script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('template/admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div><div class="sidebar-search-results"><div class="list-group"><a href="#" class="list-group-item"><div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a></div></div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        

        <!-- Category -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/category" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/category-intrash" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trash</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/category/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li> 

        <!-- Product -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/product" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/product-intrash" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trash</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/product/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li> 

        <!-- Brand -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Brand
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/brand" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Brand List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/brand-intrash" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trash</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/brand/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li> 

        <!-- Link -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Link
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/link" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Link List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/link-intrash" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trash</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/link/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li> 


                  <!-- Customer -->
                  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Customer
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/customer" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Customer List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/customer-intrash" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trash</p>
                </a>
              </li>
            </ul>
          </li> 


           <!-- User -->
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/user-intrash" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trash</p>
                </a>
              </li>
            </ul>
          </li> 



        <!-- Order -->
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Order
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/order" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Order List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/order-intrash" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trash</p>
                </a>
              </li>
            </ul>
          </li> 


        <!-- Orderdetail -->
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Orderdetail
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/orderdetail" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Orderdetail List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/orderdetail-intrash" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trash</p>
                </a>
              </li>
            </ul>
          </li> 
                  <!-- Contact -->
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Contact
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/contact" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/contact-intrash" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trash</p>
                </a>
              </li>
            </ul>
          </li>




          <!-- end -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>