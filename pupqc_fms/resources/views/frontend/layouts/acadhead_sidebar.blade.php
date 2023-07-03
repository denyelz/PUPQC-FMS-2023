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
                                    Admin Setup
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/admin/acadhead_systemrole" class="nav-link">
                                            <i class="fas fa-user nav-icon"></i>
                                        <p class="p-drop">System Role</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/admin/acadhead_newuser" class="nav-link">
                                            <i class="fas fa-user-lock nav-icon"></i>
                                        <p class="p-drop">New User</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/admin/acadhead_acadrank" class="nav-link">
                                        <i class="far fa-star nav-icon"></i>
                                        <p class="p-drop">Academic Rank</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/admin/acadhead_facultytype" class="nav-link">
                                            <i class="fas fa-users nav-icon"></i>
                                        <p class="p-drop">Faculty Type</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/admin/acadhead_designation" class="nav-link">
                                        <i class="fas fa-anchor nav-icon"></i>
                                        <p class="p-drop">Designation</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/admin/acadhead_programs" class="nav-link">
                                        <i class="fas fa-archive nav-icon"></i>
                                        <p class="p-drop">Programs</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/admin/acadhead_specialization" class="nav-link">
                                        <i class="fas fa-hat-wizard nav-icon"></i>
                                        <p class="p-drop">Specialization</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/admin/acadhead_role" class="nav-link">
                                        <i class="fas fa-hard-hat nav-icon"></i>
                                        <p class="p-drop">Role</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-user-shield"></i>
                                        <p>
                                            Acad Head Setup
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/acadhead/acadhead_reqbin" class="nav-link">
                                        <i class="fas fa-folder nav-icon"></i>
                                        <p class="p-drop">Requirements Bin</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/acadhead/acadhead_reqtype" class="nav-link">
                                        <i class="fas fa-folder-plus nav-icon"></i>
                                        <p class="p-drop">Requirement Type</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/acadhead/acadhead_activities" class="nav-link">
                                        <i class="fas fa-sticky-note nav-icon"></i>
                                        <p class="p-drop">Activity</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/acadhead/acadhead_acttype" class="nav-link">
                                        <i class="fas fa-envelope-open-text nav-icon"></i>
                                        <p class="p-drop">Activity Type</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/acadhead/acadhead_classsched" class="nav-link">
                                        <i class="fas fa-list-ul nav-icon"></i>
                                        <p class="p-drop">Class Schedule</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="acadhead/acadhead_classobserve" class="nav-link">
                                        <i class="fas fa-list-ol nav-icon"></i>
                                        <p class="p-drop">Class Observation</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="acadhead/acadhead_reports" class="nav-link">
                                        <i class="fas fa-clipboard nav-icon"></i>
                                        <p class="p-drop">Reports</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
