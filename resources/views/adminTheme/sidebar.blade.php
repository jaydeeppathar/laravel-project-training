<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('adminTheme/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('adminTheme/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
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
            </div>
        </div>  

      <!-- Sidebar Menu -->
        <nav class="mt-2 search" >
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{ route('admin.index')}}" class="nav-link {{ (request()->is('admin/index*')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        {{-- <i class="right fas fa-angle-left"></i> --}}
                        </p>
                    </a>
               </li>
               <li class="nav-item menu-open">
                    <a href="{{ route('user.index') }}" class="nav-link {{ (request()->is('user*')) ? 'active' : '' }}">
                        <i class="fa fa-clipboard nav-icon" ></i>
                        <p>
                            Users
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{ route('post.index') }}" class="nav-link {{ (request()->is('admin/post*')) ? 'active' : '' }}">
                        <i class="fa fa-clipboard nav-icon" ></i>
                        <p>
                            Post
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{ route('contactus.index') }}" class="nav-link {{ (request()->is('contactus*')) ? 'active' : '' }}">
                        <i class="fa fa-user nav-icon"></i>
                            <p>
                            Contact
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                            </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{ route('carousel.index') }}" class="nav-link {{ (request()->is('carousel*')) ? 'active' : '' }}">
                        <i class="fa fa-users nav-icon"></i>
                        <p>
                            Carousel
                           {{-- <i class="right fas fa-angle-left"></i> --}}
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{ route('category.index') }}" class="nav-link {{ (request()->is('category*')) ? 'active' : '' }}">
                        <i class="fa fa-users nav-icon"></i>
                        <p>
                            Category
                           {{-- <i class="right fas fa-angle-left"></i> --}}
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{ route('blog.index') }}" class="nav-link {{ (request()->is('blog*')) ? 'active' : '' }}">
                        <i class="fa fa-users nav-icon"></i>
                        <p>
                            Blog
                           {{-- <i class="right fas fa-angle-left"></i> --}}
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>