<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        
        <link rel="stylesheet" href="./css/style.css" />

        <!-- FONT AWESOME ICON FOR SIDEBAR TOGGLE -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>

        <!-- JQUERY CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

        <!--BOOTSTRAP CSS-->
        <link ref="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>

        <!--GOOGLE FONTS CDN-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,100&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>
        
        <!-- FROM MD BOOTSTRAP CDNS -->
            <!-- Font Awesome -->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
            <!-- Google Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
                <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>

        <!-- Tailwind CDN -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    </head>
    <body>

<!-- TOP NAVIGATION BAR -->
        <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <div class="px-3 py-3 lg:px-5 lg:pl-3">
              <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                  <a href="#" class="flex ml-2 md:mr-24">
                    <img src="https://cdn.pup.edu.ph/img/symbols/logo88x88.png" class="h-8 mr-3" alt="FlowBite Logo" />
                    <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">PUPQCFMS</span>
                  </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ml-3">
                      <div>
                        <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                          <span class="sr-only">Open user menu</span>
                          <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                        </button>
                      </div>
                      <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                          <p class="text-sm text-gray-900 dark:text-white" role="none">
                            Neil Sims
                          </p>
                          <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                            neil.sims@flowbite.com
                          </p>
                        </div>
                        <ul class="py-1" role="none">
                          <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                          </li>
                          <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                          </li>
                          <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">    </a>
                          </li>
                          <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
        </nav>

        <!-- SIDE BAR MENU -->
        <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
             <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
        <div class="side-bar">
            <div class="row-cols-2 b">
                <div class="col">
                    <h4>PUPQC<b>FMS</b></h4>
                </div>
                <!-- <div class="col">
                    <div class="close-btn">
                        <i
                            class="fas fa-times"
                            style="color: var(--text-color-1)"
                        ></i>
                    </div>
                </div> -->
            </div>

            <div class="menu">
                <div class="item">
                    <a href="/testing/index.html">Dashboard</a>
                </div>
                
                <div class="item">
                    <a class="sub-btn">
                       Account Setup
                        <i class="fas fa-angle-right dropdown"></i>
                    </a>

                    <div class="sub-menu">
                        <a href="/testing/links/accounts_setup/users.html" class="sub-item">User</a>
                        <a href="/testing/links/accounts_setup/role.html" class="sub-item">Roles</a>
                        <a href="/testing/links/accounts_setup/designation.html" class="sub-item">Designation</a>
                        <a href="/testing/links/accounts_setup/specialization.html" class="sub-item">Specialization</a>
                        <a href="/testing/links/accounts_setup/program.html" class="sub-item">Program</a>
                        <a href="/testing/links/accounts_setup/acad_role.html" class="sub-item">Academic Role</a>
                        <a href="/testing/links/accounts_setup/faculty_type.html" class="sub-item">Faculty Type</a>
                    </div>
                </div>

                <div class="item">
                    <a class="sub-btn"
                        >Classes<i class="fas fa-angle-right dropdown"></i
                    ></a>
                    <div class="sub-menu">
                        <a href="/testing/links/class_schedule/class_sched.html" class="sub-item">Class Schedule</a>
                        <a href="/testing/links/class_schedule/class_observe.html" class="sub-item">Observation</a>
                    </div>
                </div>

                <div class="item">
                    <a class="sub-btn"
                        >Documents<i class="fas fa-angle-right dropdown"></i
                    ></a>
                    <div class="sub-menu">
                        <a href="/testing/links/requirement_docs/req_types.html" class="sub-item">Requirement Types</a>
                        <a href="/testing/links/requirement_docs/req_bin.html" class="sub-item">Requirement Bin</a>
                    </div>
                </div>

                <div class="item">
                    <a class="sub-btn">Activities<i class="fas fa-angle-right dropdown"></i></a>
                    <div class="sub-menu">
                        <a href="/testing/links/activities/activity_list.html" class="sub-item">Lists</a>
                        <a href="/testing/links/activities/activity_type.html" class="sub-item">Types</a>
                    </div>
                </div>

                <div class="item">
                    <a class="sub-btn">Reports<i class="fas fa-angle-right dropdown"></i></a>
                    <div class="sub-menu">
                        <a href="/testing/links/reports/attendance_report.html" class="sub-item">Attendance</a>
                        <a href="/testing/links/reports/observation_report.html" class="sub-item">Observation</a>
                        <a href="/testing/links/reports/submission_report.html" class="sub-item">Submission</a>
                        <a href="/testing/links/reports/activities_report.html" class="sub-item">Activities</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
             </div>
        </aside>

                <!-- SCRIPT FOR SIDEBAR TOGGLE -->
        <script type="text/javascript">
            $(document).ready(function () {
                //jquery for toggle sub menus
                $(".sub-btn").click(function () {
                    $(this).next(".sub-menu").slideToggle();
                    $(this).find(".dropdown").toggleClass("rotate");
                });

                //jquery for expand and collapse the sidebar
                $(".menu-btn").click(function () {
                    $(".side-bar").addClass("active");
                    $(".menu-btn").css("visibility", "hidden");
                });

                $(".close-btn").click(function () {
                    $(".side-bar").removeClass("active");
                    $(".menu-btn").css("visibility", "visible");
                });
            });
        </script>        
        
    <!--SCRIPT FOR WHOLE JS BUNDLE-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>   