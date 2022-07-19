<?php 
use App\Http\Controllers\CartController;
$total=0;
if(Auth::user())
{
  $total= CartController::cartItem();
}

?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('myOrders')}}" class="nav-link text-warning">Here is yours food order</a>
      </li>
     
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link {{$total == 0 ? 'disabled':''}}" href="{{route('cart')}}">
          <i class="fa fa-shopping-cart"></i>
          <span class="badge badge-danger navbar-badge">{{$total}}</span>
        </a>
        {{-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="text-center">
            <a href="{{route('cart')}}" class="text-success p-2x">Total : {{$total}}</a>
          </div>

         
              
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  apple
                </h3>
                <p class="text-sm">$ :21 <span class="text-sm text-muted pl-2">Quantity :12</span></p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>

          <a href="" class="dropdown-item dropdown-footer bg-primary" >View All</a>

        </div> --}}
      </li>
      <!-- Notifications Dropdown Menu -->
     
    </ul>
  </nav>