<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/home') }}" class="brand-link">
    
      <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="Hadakaree Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Hadakaree</span>
    
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image"> 
          <img src="{{ asset('images/' . Auth::user()->pic)}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
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
            

         @if(Auth::check() && Auth::user()->role_id != 1)    
          <li class="nav-item">
            <a href="{{ url('/booking_admin') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Booking
                <span class="right badge badge-danger">{{session('bookingNO')}}</span>
              </p>
            </a>
          </li>
          @endif  
            
          <li class="nav-header">SALOON MANAGEMENT</li>
            
            
            
      
            <!--Admin Settings-->
           
            @if(Auth::check() && Auth::user()->role_id == 1 || Auth::user()->role_id == 2 )
            
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Saloon Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
                    <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/edit_saloon') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Saloon</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/add_gallery') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Saloon Gallery</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/add_trending') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Trending</p>
                </a>
              </li>
            </ul>
                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/package') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Package</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/create_category') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>
            </ul>
              
          </li>
            
         @endif 
            <!--END Admin Settings-->
           
            
            
            
            
          <li class="nav-header">SETTINGS</li> 
            <!--Admin Settings-->
           
            @if(Auth::check() && Auth::user()->role_id == 1)
            
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                User Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
                    <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/create_user_roles') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create User Roles</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/create_users') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Users</p>
                </a>
              </li>
            </ul>
              
                   <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/saloon_admin') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Saloon</p>
                </a>
              </li>
            </ul>
          </li>
            
         @endif 
            <!--END Admin Settings-->
            
            
        
                   <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                User Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
               <!--        
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/view_profile') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Profile</p>
                </a>
              </li>
            </ul>
                -->       
                       
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/edit_profile') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Profile</p>
                </a>
              </li>
            </ul>
          </li>
            
            
         <li class="nav-item">
            <a href="{{ url('/password_reset') }}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Password Reset
              </p>
            </a>
          </li>
            
          <li class="nav-item">
            <a href="{{ url('/logout') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Log Out
              </p>
            </a>
          </li>
            
            
            
            
            
            
            
            
            
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="{{ url('/contact') }}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Contact</p>
            </a>
          </li>
            
 
   
            
            
            
        </ul>
          
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>







