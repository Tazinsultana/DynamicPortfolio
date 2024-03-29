<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">


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
        </ul>
        </nav>
        <!-- /.sidebar-menu -->

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->

                <li class="nav-item menu-open">
                    <a href="{{ route('about.index') }}" class="nav-link active">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            About
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                <li class="nav-item menu-open">
                    <a href="{{ route('education.index') }}" class="nav-link active">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Qualification
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>


                </li>

                <li class="nav-item menu-open">
                    <a href="{{ route('experience.index') }}" class="nav-link active">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Experience
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    {{-- <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Product</p>
                            </a>
                        </li>

                    </ul> --}}
                </li>

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Skill
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    {{-- <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pending orders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Confirmed Orders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cancelled orders</p>
                            </a>
                        </li>
                    </ul> --}}
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Projects
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                </li>

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Contacts
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                </li>


            </ul>





        </nav>

        <!-- /.sidebar -->
    </div>
</aside>
