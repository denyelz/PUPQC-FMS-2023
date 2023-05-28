@extends('frontend.layouts.main')

	@section('main-container')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    <h1 class="m-0">Profile</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                    </div>
                </div>
                </div>
            </div>

        <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                    <div class="mx-auto col-11 card card-primary ">
                        <div class="card-body box-profile col-md-3">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="https://lh3.googleusercontent.com/a-/ACB-R5SPNI6x5R3YO5R7LcdJlXMQGtn6kMwaDgvvu2S6=s75-c" alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center">Demelyn E. Monzon, MEM</h3>
                        <p class="text-muted text-center">Head, Academic Programs</p>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row mx-auto col-11 align-content-between ">
                        <!-- Left container -->
                        <div class="col-md-3">
                            <div class="card card-primary">
                                <div class="card-header" style="background-color: #800000;">
                                    <h3 class="card-title">About Me</h3>
                                </div>
                                <div class="card-body">
                                    <strong><i class="fas fa-book mr-1"></i> Education</strong>

                                    <p class="text-muted">B.S. in Computer Science from the University of Sto. Tomas</p>
                                    <hr>
                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                                    <p class="text-muted">Manila Philippines</p>
                                    <hr>
                                    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Right container -->
                        <div class="col-sm-9">
                            <!-- Faculty details -->
                            <div class="card">
                                <div class="card-body" >
                                    <div class="tab-content">
                                        <div class="ml-3 mt-3 mb-3">
                                            <div class="row">
                                                <label class="mt-2" style="font-size: 1.1rem;">Faculty Details</label>
                                            </div>
                                            <div class="row">
                                                <div class="row mx-auto">
                                                    <div class="col-md-6">
                                                        <label class="required-input">Faculty Type</label>
                                                        <input id="selectedOption"  readonly  type="text" class="form-control dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" placeholder="Regular">
                                                            <div class="dropdown-menu" id="myDropdown">
                                                                <button class="dropdown-item d1" type="button">Faculty extensionist</button>
                                                                <button class="dropdown-item d1" type="button">Part-time faculty</button>
                                                                <button class="dropdown-item d1" type="button">Regular faculty</button>
                                                            </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="required-input">Academic Rank</label>
                                                        <input  readonly  type="text" class="form-control dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" placeholder="Assoc. Prof.">
                                                            <div class="dropdown-menu" id="myDropdown">
                                                                <button class="dropdown-item" type="button">Option 1</button>
                                                                <button class="dropdown-item" type="button">Option 2</button>
                                                                <button class="dropdown-item" type="button">Instructor</button>
                                                            </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="required-input">Designation</label>
                                                        <input  readonly  type="text" class="form-control dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" placeholder="Head, Academic Programs">
                                                            <div class="dropdown-menu" id="myDropdown">
                                                                <button class="dropdown-item" type="button">Option 1</button>
                                                                <button class="dropdown-item" type="button">Administrative Personnel</button>
                                                                <button class="dropdown-item" type="button">Faculty Management</button>
                                                            </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="required-input">Specialization</label>
                                                        <input  readonly  type="text" class="form-control dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" placeholder="Human Resource Management">
                                                            <div class="dropdown-menu" id="myDropdown">
                                                                <button class="dropdown-item" type="button">Option 1</button>
                                                                <button class="dropdown-item" type="button">Option 2</button>
                                                                <button class="dropdown-item" type="button">Human Resource Management</button>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Personal Information -->
                            <div class="card">
                                <div class="card-body" >
                                    <div class="tab-content">
                                        <div>
                                            <div class="row">
                                                <label class="ml-3 mt-3 mb-3" style="font-size: 1.1rem;">Personal Information</label>
                                            </div>
                                            <div class="row">
                                                <div class="row mx-auto">
                                                    <div class="col-md-4">
                                                        <label class="required-input">Surname</label>
                                                        <input  readonly  type="text" class="form-control dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" placeholder="Monzon">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="required-input">First name</label>
                                                        <input  readonly  type="text" class="form-control dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" placeholder="Demelyn">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="required-input">Middle name</label>
                                                        <input  readonly  type="text" class="form-control dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" placeholder="E.">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="row mx-auto mt-3 mb-3">
                                                    <div class="col-md-6">
                                                        <label class="required-input">Extension name</label>
                                                        <input  readonly  type="text" class="form-control dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" placeholder="N/A">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="required-input">Salutation</label>
                                                        <input  readonly  type="text" class="form-control dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" placeholder="MEM">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body" >
                                    <div class="tab-content">
                                        <div>
                                            <div class="row">
                                                <div class="row mx-auto">
                                                    <div class="col-md-4">
                                                        <label class="required-input">Phone No.</label>
                                                        <input  readonly  type="text" class="form-control dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" placeholder="09123456789">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="required-input">Hire date</label>
                                                        <input type="date" class="form-control date-range-filter" id="date_" name="date_" placeholder="date" tabindex="1" required>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="required-input">Birthday</label>
                                                        <input type="date" class="form-control date-range-filter" id="date_" name="date_" placeholder="date" tabindex="1" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="row mx-auto mt-3 mb-3">
                                                    <div class="col-md-6">
                                                        <label class="required-input">Birthplace</label>
                                                        <input  readonly  type="text" class="form-control dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" placeholder="Quezon City">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="required-input">Province</label>
                                                        <input  readonly  type="text" class="form-control dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" placeholder="Tondo, Romblon">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body" >
                                    <div class="tab-content">
                                        <div>
                                            <div class="row">
                                                <label class="ml-3 mt-3 mb-3" style="font-size: 1.1rem;">Vicinity Information</label>
                                            </div>
                                            <div class="row">
                                                <div class="row mx-auto">
                                                    <div class="col-md-6">
                                                        <label class="required-input">Municipality</label>
                                                        <input  readonly  type="text" class="form-control dropdown-toggle" aria-haspopup="true" aria-expanded="false" placeholder="Quezon City">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="required-input">Baranggay</label>
                                                        <input  readonly  type="text" class="form-control dropdown-toggle" aria-haspopup="true" aria-expanded="false" placeholder="West Triangle">
                                                    </div>
                                                </div>
                                                <div class="row mx-auto">
                                                    <div class="col-md-12">
                                                        <label class="required-input">Street Name</label>
                                                        <input  readonly  type="text" class="form-control dropdown-toggle" aria-haspopup="true" aria-expanded="false" placeholder="Ecol St.">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="required-input">House/Blk/Lot no.</label>
                                                        <input  readonly  type="text" class="form-control dropdown-toggle" aria-haspopup="true" aria-expanded="false" placeholder=" 0988">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="m-6 p-6">
                                <div class="text-lg-right">
                                    <button data-toggle="modal"
                                            data-target="#modal-xl"
                                            type="button"
                                            class="px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                        Update details
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>

    @endsection
