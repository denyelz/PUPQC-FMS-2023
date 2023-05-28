@extends('frontend.layouts.main')

	@section('main-container')



            <!-- Content Wrapper. Outer Container -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row-col-sm-6 mb-2">
                            <div class="col-md-6 ml-4">
                                <h1 class="m-0">Dashboard</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main content -->
                <section class="container">
                    <div class="row">
                        <div class="col-md-7 m-auto">
                            <div class="row">

                            <div class="col-md-6">
                                <div class="container-fluid">
                                    <div class="info-box">
                                        <span class="info-box-icon  pal-1 pal-1 text-col-2 elevation-1"><i class="fas fa-user-shield"></i></span>

                                        <div class="info-box-content">
                                        <span class="info-box-text">Academic Heads</span>
                                        <span class="info-box-number">
                                            0
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="container-fluid">
                                    <div class="info-box">
                                        <span class="info-box-icon pal-1 text-col-2 elevation-1"><i class="fas fa-folder"></i></span>

                                        <div class="info-box-content">
                                        <span class="info-box-text">Faculty Bin Percentage</span>
                                        <span class="info-box-number">
                                            0
                                            <small>%</small>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="container-fluid">
                                    <div class="info-box">
                                        <span class="info-box-icon pal-1 text-col-2 pal-1 elevation-1"><i class="fas fa-user-graduate"></i></span>

                                        <div class="info-box-content">
                                        <span class="info-box-text">University Directors</span>
                                        <span class="info-box-number">
                                            0
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="container-fluid">
                                    <div class="info-box">
                                        <span class="info-box-icon pal-1 text-col-2 pal-1 elevation-1"><i class="fas fa-user-friends"></i></span>

                                        <div class="info-box-content">
                                        <span class="info-box-text">Total Meetings</span>
                                        <span class="info-box-number">
                                            0
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="container-fluid">
                                    <div class="info-box">
                                        <span class="info-box-icon pal-1 text-col-2 pal-1 elevation-1"><i class="fas fa-users-cog"></i></span>

                                        <div class="info-box-content">
                                        <span class="info-box-text">Staff & Checkers</span>
                                        <span class="info-box-number">
                                            0
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="container-fluid">
                                    <div class="info-box">
                                        <span class="info-box-icon pal-1 text-col-2 pal-1 elevation-1"><i class="fas fa-flag"></i></span>

                                        <div class="info-box-content">
                                        <span class="info-box-text">Total Activities</span>
                                        <span class="info-box-number">
                                            0
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="container-fluid">
                                    <div class="info-box">
                                        <span class="info-box-icon pal-1 text-col-2 pal-1 elevation-1"><i class="fas fa-user-plus"></i></span>

                                        <div class="info-box-content">
                                        <span class="info-box-text">Total Faculty Members</span>
                                        <span class="info-box-number">
                                            0
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="container-fluid">
                                    <div class="info-box">
                                        <span class="info-box-icon pal-1 text-col-2 pal-1 elevation-1"><i class="fas fa-clipboard-list"></i></span>

                                        <div class="info-box-content">
                                        <span class="info-box-text">Reports Status</span>
                                        <span class="info-box-number">
                                            0 <small>%</small>
                                        </span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="container-fluid">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title mt-1">
                                    <i class="fas fa-chart-pie"></i>
                                    Summaries
                                    </h3>
                                    <div class="card-tools">
                                    <ul class="nav nav-pills ml-auto">
                                        <li class="nav-item">
                                        <a class="nav-link active " href="#XD" data-toggle="tab">Admin</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="#xd" data-toggle="tab">AcadHead</a>
                                        </li>
                                    </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <!-- charts -->
                                        <div class="chart tab-pane active" id="XD" style="position: relative; height: 300px;">
                                            <!-- <canvas id=""></canvas> -->
                                        </div>
                                        <div class="chart tab-pane" id="xd" style="position: relative; height: 300px;">
                                            <!-- <canvas id=""></canvas> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </section>

                <!-- Analytics -->
                <div class="row m-auto">
                    <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        <h5 class="card-title">Monthly Recap Report</h5>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                            <div class="btn-group">
                            <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                <i class="fas fa-wrench"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <a class="dropdown-divider"></a>
                                <a href="#" class="dropdown-item">Separated link</a>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                            <p class="text-center">
                                <strong>Monitoring Status: 1 Jan, 2024 - 30 Nov, 2024</strong>
                            </p>

                            <div class="chart">
                                <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                            </div>

                            </div>

                            <div class="col-md-4">
                            <p class="text-center">
                                <strong>Goal Completion</strong>
                            </p>

                            <div class="progress-group">
                                Overall Progress
                                <span class="float-right"><b>80</b>/100</span>
                                <div class="progress progress-sm">
                                <div class="progress-bar bg-primary" style="width: 80%"></div>
                                </div>
                            </div>


                            <div class="progress-group">
                                Submitted Requirement Bin
                                <span class="float-right"><b>310</b>/400</span>
                                <div class="progress progress-sm">
                                <div class="progress-bar bg-success" style="width: 75%"></div>
                                </div>
                            </div>


                            <div class="progress-group">
                                <span class="progress-text">Activity Statuses</span>
                                <span class="float-right"><b>30</b>/50</span>
                                <div class="progress progress-sm">
                                <div class="progress-bar bg-warning" style="width: 60%"></div>
                                </div>
                            </div>


                            <div class="progress-group">
                                Monthly Reports
                                <span class="float-right"><b>30</b>/500</span>
                                <div class="progress progress-sm">
                                <div class="progress-bar bg-danger" style="width: 10%"></div>
                                </div>
                            </div>

                            </div>

                        </div>

                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-3 col-6">
                                <div class="description-block border-right">
                                    <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 80%</span>
                                    <h5 class="description-header">Overall</h5>
                                    <span class="description-text">Progress</span>
                                </div>

                                </div>

                                <div class="col-sm-3 col-6">
                                <div class="description-block border-right">
                                    <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 30%</span>
                                    <h5 class="description-header">Per term</h5>
                                    <span class="description-text">Reports</span>
                                </div>

                                </div>

                                <div class="col-sm-3 col-6">
                                <div class="description-block border-right">
                                    <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                                    <h5 class="description-header">Requirement</h5>
                                    <span class="description-text">Requirement</span>
                                </div>

                                </div>

                                <div class="col-sm-3 col-6">
                                <div class="description-block">
                                    <span class="description-percentage text-warning"><i class="fas fa-caret-down"></i> 38%</span>
                                    <h5 class="description-header">GOAL</h5>
                                    <span class="description-text">COMPLETIONS</span>
                                </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    </div>
                </div>

            </div>

    @endsection
