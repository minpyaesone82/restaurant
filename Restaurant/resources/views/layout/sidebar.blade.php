<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            @if (Auth::user())
                {{Auth::user()->name}}
            @else
                Guest
            @endif
          </a>
        </div>
      </div>

   

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            
            <ul class="nav nav-treeview">
              <li class="nav-item {{request()->is('products')?'bg-info':''}}">
                <a href="{{route('product.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Food Product</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <li class="nav-item ml-1  {{request()->is('cart-product')?'bg-info':''}}">
            <a href="{{route('product.all')}}" class="nav-link" >
              <i class="fa fa-list mr-2" ></i>
              <p>Food List</p>
            </a>
          </li>

          <li class="nav-item ml-1 my-4">
            <a href="{{route('auth.logout')}}" class="nav-link btn btn-danger" >
              <i class="fa fa-lock mr-2" ></i>
              <p>Logout</p>
            </a>
          </li>

             
              
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>