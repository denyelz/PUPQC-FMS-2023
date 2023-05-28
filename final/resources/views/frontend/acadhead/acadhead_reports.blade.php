@extends('frontend.layouts.main')

	@section('main-container')

        <!-- Content Wrapper. Outer Container -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row-col-sm-6 mb-2">
                        <div class="col-md-6 ml-4">
                            <h1 class="m-0">Reports Dashboard</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <ul class="nav nav-tabs" id="custom-content-above-tab"
                    role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active"
                            id="custom-content-above-home-tab"
                            data-toggle="pill"
                            href="#custom-content-above-home" role="tab"
                            aria-controls="custom-content-above-home"
                            aria-selected="true">Class Reports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            id="custom-content-above-profile-tab"
                            data-toggle="pill"
                            href="#custom-content-above-profile" role="tab"
                            aria-controls="custom-content-above-profile"
                            aria-selected="false">Observation Reports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            id="custom-content-above-messages-tab"
                            data-toggle="pill"
                            href="#custom-content-above-messages" role="tab"
                            aria-controls="custom-content-above-messages"
                            aria-selected="false">Requirement Submission Reports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            id="custom-content-above-settings-tab"
                            data-toggle="pill"
                            href="#custom-content-above-settings" role="tab"
                            aria-controls="custom-content-above-settings"
                            aria-selected="false">Activity Reports</a>
                    </li>
                </ul>
                <div class="tab-custom-content">
                    <div class="card-header">
                        <!-- Date range -->
                        <div class="row justify-content-between"
                            style="height: 40px;">
                            <div class="btn-group btn-group-sm">
                                <div>
                                    <p class="text-dark pl-3 pr-2 mt-2">Date
                                        From:</p>
                                </div>&nbsp;&nbsp;
                                <div>
                                    <input type="date" class="form-control
                                        date-range-filter" id="date_from"
                                        name="date_from" placeholder="date"
                                        tabindex="1" required>
                                </div>&nbsp;&nbsp;
                                <div>
                                    <p class="text-dark pl-3 pr-2 mt-2">Date
                                        To: </p>
                                </div>&nbsp;&nbsp;
                                <div>
                                    <input type="date" class="form-control
                                        date-range-filter" id="date_to"
                                        name="date_to" placeholder="date"
                                        tabindex="1" required>
                                </div>
                                <div>
                                    <button id="btnDateReset" type="button"
                                        class="text-col-1 btn btn-secondary
                                        btn-s p-drop ml-2 mb-5 pr-3 mt-1">Reset</button>
                                </div>
                            </div>

                            <div class="btn-group btn-group-sm">
                                <div>
                                    <p class="text-dark pl-3 pr-2 mt-2">Status
                                        Filter:</p>
                                </div>&nbsp;&nbsp;
                                <div>
                                    <button type="button"
                                        class="text-col-1 btn btn-block
                                        btn-warning btn-s p-drop">Pending</button>
                                </div>
                                <div>
                                    <button type="button"
                                        class="text-col-1 btn btn-block
                                        btn-danger btn-s p-drop">Cancelled</button>
                                </div>
                                <div>
                                    <button type="button"
                                        class="text-col-1 btn btn-block
                                        btn-info btn-s p-drop">Ongoing</button>
                                </div>
                                <div>
                                    <button type="button"
                                        class="text-col-1 btn btn-block
                                        btn-success btn-s p-drop">Done</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="custom-content-above-tabContent">
                    <div class="tab-pane fade show active" id="custom-content-above-home" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
                        <!-- Class Attendace Reports -->
                        <section class="container">
                            <div class="mr-5 ml-5">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row justify-content-between">
                                            <div class="dt-buttons btn-group flex-wrap">
                                                <button tabindex="0"
                                                    aria-controls="dataTable" type="button"
                                                    class="text-col-1 buttons-pdf
                                                    buttons-html5 btn btn-primary mr-2"
                                                    title="PDF export.">
                                                    <span>Export as PDF</span>
                                                </button>
                                                <button tabindex="0"
                                                    aria-controls="dataTable" type="button"
                                                    class="text-col-1 buttons-excel
                                                    buttons-html5 btn btn-success"
                                                    title="Excel export.">
                                                    <span>Export as XLS</span>
                                                </button>
                                            </div>
                                            <!-- Search function --->
                                            <div class="text-right">
                                                <div class="form-inline float-right">
                                                    <div class="input-group"
                                                        data-widget="sidebar-search">
                                                        <input class="form-control
                                                            form-control-sidebar px-4 py-2
                                                            text-sm font-medium"
                                                            type="search"
                                                            placeholder="Search"
                                                            aria-label="Search">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-sidebar">
                                                                <i class="fas fa-search
                                                                    fa-fw"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tables of roles -->
                                    <div class="card-body p-0">
                                        <table class="table table-striped">
                                            <thead class="pal-1 text-col-2">
                                                <tr>
                                                    <th>Checked by</th>
                                                    <th>Faculty</th>
                                                    <th>Date of class</th>
                                                    <th>Asgmt code</th>
                                                    <th>Sub Code</th>
                                                    <th>Subject Title</th>
                                                    <th>Units</th>
                                                    <th>Year and Section</th>
                                                    <th>Room</th>
                                                    <th>Proof of Attendance</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Andrew Brinas
                                                    </td>
                                                    <td>
                                                        Irynne Gatchalian
                                                    </td>
                                                    <td>
                                                        04-14-23, 7:00AM - 1:00PM
                                                    </td>
                                                    <td>
                                                        R
                                                    </td>
                                                    <td>
                                                        IT-ACP
                                                    </td>
                                                    <td>
                                                        Advance Computer Programming
                                                    </td>
                                                    <td>
                                                        6
                                                    </td>
                                                    <td>
                                                        BSIT 4-2
                                                    </td>
                                                    <td>
                                                        ACAD-202
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="text-white bg-blue-500
                                                            hover:bg-blue-600
                                                            focus:outline-none focus:ring-4
                                                            focus:ring-blue-300 font-medium
                                                            rounded-full text-sm px-2
                                                            text-center mr-2 mb-2
                                                            dark:bg-blue-600
                                                            dark:hover:bg-blue-600
                                                            dark:focus:ring-blue-800">Ongoing</button>
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="text-white bg-blue-500
                                                            hover:bg-blue-600
                                                            focus:outline-none focus:ring-4
                                                            focus:ring-blue-300 font-medium
                                                            rounded-full text-sm px-2
                                                            text-center mr-2 mb-2
                                                            dark:bg-blue-600
                                                            dark:hover:bg-blue-600
                                                            dark:focus:ring-red-800">Ongoing</button>
                                                    </td>
                                                </tbody>
                                                <tfoot>
                                                    <td class="dataTables_info text-col-1"
                                                        id="dataTable_info" role="status"
                                                        aria-live="polite" colspan="12"
                                                        style="font-size: .9rem;">
                                                        Showing x to x of x entries
                                                    </td>
                                                </tfoot>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel" aria-labelledby="custom-content-above-profile-tab">
                        <!-- Class Observation Reports -->
                        <section class="container">
                            <div class="mr-5 ml-5">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row justify-content-between">
                                            <div class="dt-buttons btn-group flex-wrap">
                                                <button tabindex="0"
                                                    aria-controls="dataTable" type="button"
                                                    class="text-col-1 buttons-pdf
                                                    buttons-html5 btn btn-primary mr-2"
                                                    title="PDF export.">
                                                    <span>Export as PDF</span>
                                                </button>
                                                <button tabindex="0"
                                                    aria-controls="dataTable" type="button"
                                                    class="text-col-1 buttons-excel
                                                    buttons-html5 btn btn-success"
                                                    title="Excel export.">
                                                    <span>Export as XLS</span>
                                                </button>
                                            </div>
                                            <!-- Search function --->
                                            <div class="text-right">
                                                <div class="form-inline float-right">
                                                    <div class="input-group"
                                                        data-widget="sidebar-search">
                                                        <input class="form-control
                                                            form-control-sidebar px-4 py-2
                                                            text-sm font-medium"
                                                            type="search"
                                                            placeholder="Search"
                                                            aria-label="Search">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-sidebar">
                                                                <i class="fas fa-search
                                                                    fa-fw"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tables of roles -->
                                    <div class="card-body p-0">
                                        <table class="table table-striped">
                                            <thead class="pal-1 text-col-2">
                                                <tr>
                                                    <th>Created by</th>
                                                    <th>Date of Observation</th>
                                                    <th>Faculty</th>
                                                    <th>Asgmt Code</th>
                                                    <th>Sub Code</th>
                                                    <th>Subject Title</th>
                                                    <th>Units</th>
                                                    <th>Year and Section</th>
                                                    <th>Room</th>
                                                    <th>Subject schedule</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Academic Head
                                                    </td>
                                                    <td>
                                                        04-28-23, 07:00 AM - 01:00 PM
                                                    </td>
                                                    <td>
                                                        Irynne Gatchalian
                                                    </td>
                                                    <td>
                                                        R
                                                    </td>
                                                    <td>
                                                        IT-ACP
                                                    </td>
                                                    <td>
                                                        Advance Computer Programming
                                                    </td>
                                                    <td>
                                                        6
                                                    </td>
                                                    <td>
                                                        BSIT 4-2
                                                    </td>
                                                    <td>
                                                        ACAD-202
                                                    </td>
                                                    <td>
                                                        Friday | 07:00 AM - 01:00 PM
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="text-white bg-blue-500
                                                            hover:bg-blue-600
                                                            focus:outline-none focus:ring-4
                                                            focus:ring-blue-300 font-medium
                                                            rounded-full text-sm px-3
                                                            text-center mr-2 mb-2
                                                            dark:bg-blue-600
                                                            dark:hover:bg-blue-600
                                                            dark:focus:ring-red-800">Ongoing</button>
                                                    </td>
                                                </tbody>
                                                <tfoot>
                                                    <td class="dataTables_info text-col-1"
                                                        id="dataTable_info" role="status"
                                                        aria-live="polite" colspan="12"
                                                        style="font-size: .9rem;">
                                                        Showing x to x of x entries
                                                    </td>
                                                </tfoot>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                        </section>
                    </div>
                    <div class="tab-pane fade"
                        id="custom-content-above-messages" role="tabpanel"
                        aria-labelledby="custom-content-above-messages-tab">
                        <!-- Submission Reqs Reports -->
                        <section class="container">
                            <div class="mr-5 ml-5">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row justify-content-between">
                                            <div class="dt-buttons btn-group flex-wrap">
                                                <button tabindex="0"
                                                    aria-controls="dataTable" type="button"
                                                    class="text-col-1 buttons-pdf
                                                    buttons-html5 btn btn-primary mr-2"
                                                    title="PDF export.">
                                                    <span>Export as PDF</span>
                                                </button>
                                                <button tabindex="0"
                                                    aria-controls="dataTable" type="button"
                                                    class="text-col-1 buttons-excel
                                                    buttons-html5 btn btn-success"
                                                    title="Excel export.">
                                                    <span>Export as XLS</span>
                                                </button>
                                            </div>
                                            <!-- Search function --->
                                            <div class="text-right">
                                                <div class="form-inline float-right">
                                                    <div class="input-group"
                                                        data-widget="sidebar-search">
                                                        <input class="form-control
                                                            form-control-sidebar px-4 py-2
                                                            text-sm font-medium"
                                                            type="search"
                                                            placeholder="Search"
                                                            aria-label="Search">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-sidebar">
                                                                <i class="fas fa-search
                                                                    fa-fw"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tables of roles -->
                                    <div class="card-body p-0">
                                        <table class="table table-striped">
                                            <thead class="pal-1 text-col-2">
                                                <tr>
                                                    <th style="width: 10%;">Created at</th>
                                                    <th>Title</th>
                                                    <th>Requirements</th>
                                                    <th>Deadline</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        04-16-23
                                                    </td>
                                                    <td>
                                                        Getting Started with Interview Preparation. Free online Course in Simplilearn.
                                                    </td>
                                                    <td>
                                                        Proof of Meeting/Activity Attendance
                                                    </td>
                                                    <td>
                                                        11-30-24 05:00 PM
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="text-white bg-blue-500
                                                            hover:bg-blue-600
                                                            focus:outline-none focus:ring-4
                                                            focus:ring-blue-300 font-medium
                                                            rounded-full text-sm px-3
                                                            text-center mr-2 mb-2
                                                            dark:bg-blue-600
                                                            dark:hover:bg-blue-600
                                                            dark:focus:ring-red-800">Ongoing</button>
                                                    </td>
                                                </tbody>
                                                <tfoot>
                                                    <td class="dataTables_info text-col-1"
                                                        id="dataTable_info" role="status"
                                                        aria-live="polite" colspan="12"
                                                        style="font-size: .9rem;">
                                                        Showing x to x of x entries
                                                    </td>
                                                </tfoot>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                        </section>
                    </div>
                    <div class="tab-pane fade"
                        id="custom-content-above-settings" role="tabpanel"
                        aria-labelledby="custom-content-above-settings-tab">
                        <!-- Activity Reports -->
                        <section class="container">
                            <div class="mr-5 ml-5">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row justify-content-between">
                                            <div class="dt-buttons btn-group flex-wrap">
                                                <button tabindex="0"
                                                    aria-controls="dataTable" type="button"
                                                    class="text-col-1 buttons-pdf
                                                    buttons-html5 btn btn-primary mr-2"
                                                    title="PDF export.">
                                                    <span>Export as PDF</span>
                                                </button>
                                                <button tabindex="0"
                                                    aria-controls="dataTable" type="button"
                                                    class="text-col-1 buttons-excel
                                                    buttons-html5 btn btn-success"
                                                    title="Excel export.">
                                                    <span>Export as XLS</span>
                                                </button>
                                            </div>
                                            <!-- Search function --->
                                            <div class="text-right">
                                                <div class="form-inline float-right">
                                                    <div class="input-group"
                                                        data-widget="sidebar-search">
                                                        <input class="form-control
                                                            form-control-sidebar px-4 py-2
                                                            text-sm font-medium"
                                                            type="search"
                                                            placeholder="Search"
                                                            aria-label="Search">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-sidebar">
                                                                <i class="fas fa-search
                                                                    fa-fw"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tables of roles -->
                                    <div class="card-body p-0">
                                        <table class="table table-striped">
                                            <thead class="pal-1 text-col-2">
                                                <tr>
                                                    <th>Created at</th>
                                                    <th>Title</th>
                                                    <th>Activity Type</th>
                                                    <th>Description</th>
                                                    <th>Agenda</th>
                                                    <th>Status</th>
                                                    <th>Activity Date</th>
                                                    <th>Memorandum File Directory</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        04-16-24
                                                    </td>
                                                    <td>
                                                        Re-opening of the Online Application for Graduation
                                                    </td>
                                                    <td>
                                                        Flag Raising Ceremony (Activity)
                                                    </td>
                                                    <td>
                                                        Re-opening of the Online Application for Graduation
                                                    </td>
                                                    <td>
                                                        - - - - - -
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="text-white bg-blue-500
                                                            hover:bg-blue-600
                                                            focus:outline-none focus:ring-4
                                                            focus:ring-blue-300 font-medium
                                                            rounded-full text-sm px-3
                                                            text-center mr-2 mb-2
                                                            dark:bg-blue-600
                                                            dark:hover:bg-blue-600
                                                            dark:focus:ring-red-800">Ongoing</button>
                                                    </td>
                                                    <td>

                                                        11-30-24 05:00 PM
                                                    </td>
                                                    <td>
                                                        uploads/ memorandum/ 1119b23b12cbd646a4a6c665efcb2bfe.pdf
                                                    </td>
                                                </tbody>
                                                <tfoot>
                                                    <td class="dataTables_info text-col-1"
                                                        id="dataTable_info" role="status"
                                                        aria-live="polite" colspan="12"
                                                        style="font-size: .9rem;">
                                                        Showing x to x of x entries
                                                    </td>
                                                </tfoot>

                                            </table>
                                        </div>
                                    </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>



                <!--View Modal-->
                <section class="content">
                    <div class="modal fade" id="modal-xl">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">View Modal</h4>
                                    <button type="button" class="close"
                                        data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>One fine body&hellip;</p>
                                </div>
                                <div class="modal-footer
                                    justify-content-between">
                                    <button type="button" class="btn
                                        btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn
                                        btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!--Edit Modal-->
                <section class="content">
                    <div class="modal fade" id="modal-xl-edit">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Modal</h4>
                                    <button type="button" class="close"
                                        data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>One fine body&hellip;</p>
                                </div>
                                <div class="modal-footer
                                    justify-content-between">
                                    <button type="button" class="btn
                                        btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn
                                        btn-primary">Save changes</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                </section>

                <!--Create Modal-->
                <section class="content">
                    <div class="modal fade" id="modal-xl-create">
                        <div class="modal-dialog modal-dialog-centered modal-l">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Create new
                                        requirement type</h4>
                                    <button type="button" class="close"
                                        data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="height: 500px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label class="required-input">Title</label>
                                                <input type="text"
                                                    class="form-control"
                                                    id="title" name="title"
                                                    placeholder="Title"
                                                    tabindex="1" required="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label>Description</label>
                                                <textarea type="text"
                                                    class="form-control"
                                                    id="inputField"
                                                    name="description"
                                                    placeholder="Description"
                                                    tabindex="1"
                                                    style="height: 100px;"></textarea>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="modal-footer
                                    justify-content-between">
                                    <button type="button" class="btn
                                        btn-outline-danger"
                                        data-dismiss="modal">Cancek</button>
                                    <button type="button" class="btn
                                        btn-outline-primary swalDefaultSuccess">Submit</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                </section>


            </div>

    @endsection
