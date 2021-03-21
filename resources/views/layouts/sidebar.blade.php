 @php
   $prefix = Request::route()->getPrefix();
   $route = Route::current()->getName();
 @endphp

<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          {{-- <img src="public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
        </div>
        <div class="info">
          <a href="{{ route('dashboard') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
          </li>
         
         
          <li class="nav-item has-treeview {{($prefix=='/profiles')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Registry Book
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('table')}}" class="nav-link {{($route=='table')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Clint</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('others.view')}}" class="nav-link {{($route=='others.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Others Deed</p>
                </a>
              </li>
              <li class="nav-item">
               <a href="{{route('deeds.view')}}" class="nav-link {{($route=='deeds.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Deed Formed</p>
                </a>
              </li>
              
            </ul>
          </li>


        
          
          <li class="nav-item has-treeview {{($prefix=='/website')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Website
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('imageSetup')}}" class="nav-link {{($route=='imageSetup')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Images Settings</p>
                </a>
              </li>
              <li class="nav-item">
                 <a href="{{route('land.view')}}" class="nav-link {{($route=='land.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Land Management</p>
                </a>
              </li>

            </ul>
          </li>
          
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>