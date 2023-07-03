            <!-- Sidebar Container -->
            <aside class="main-sidebar pal-1 sidebar-dark-maroon elevation-1">
                <!-- PUP Logo -->
                <a href="" class="brand-link">
                    <img src="https://cdn.pup.edu.ph/img/symbols/logo88x88.png" class="brand-image img-circle elevation-3">
                    <span class="brand-text font-weight-bolder">PUPQC-FARMS</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                            <li class="nav-item">
                                <a href="/" class="nav-link {{ '/' == request()->path() ? 'active' : '' }}">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Dashboard
                                </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-user-lock"></i>
                                <p>
                                    Class Section
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="" class="nav-link">
                                            <i class="fas fa-user nav-icon"></i>
                                        <p class="p-drop">Class Schedule</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link">
                                            <i class="fas fa-user-lock nav-icon"></i>
                                        <p class="p-drop">Class Attendanca</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="" class="nav-link">
                                <i class="nav-icon fas fa-folder"></i>
                                <p>Attendance Reports</p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
