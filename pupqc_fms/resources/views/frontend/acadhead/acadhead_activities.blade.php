@extends('frontend.layouts.main')

	@section('main-container')

            <!-- Content Wrapper. Outer Container -->
            <div class="content-wrapper">

                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row-col-sm-6 mb-2">
                            <div class="col-md-6 ml-4">
                                <h1 class="m-0">Activity Dashboard</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main content -->
                <section class="container">
                    <div class="mr-5 ml-5">
                        <div class="card">

                            <div class="card-header">
                                <p class="card-title ml-4 mt-1 row-cols-2" style="font-size: .95rem;">Show entries</p>
                                <select name="dataTable_length" aria-controls="dataTable" class="ml-5 col-1 custom-select custom-select-sm form-control form-control-sm">
                                    <option value="10">
                                        10
                                    </option>
                                    <option value="25">
                                        25
                                    </option>
                                    <option value="50">
                                        50
                                    </option>
                                    <option value="100">
                                        100
                                    </option>
                                </select>

                                <div class="row float-right justify-content-between">
                                    <div class="col-6">
                                        <input type="search" class="" placeholder=" Search activites" aria-controls="" style="width: 150px; height: 30px; font-size: .9rem; border-radius: 5px;">
                                    </div>
                                    <div class="col-6">
                                        <button data-toggle="modal" data-target="#modal-xl-create" type="button" class="text-col-1 btn btn-success btn-m p-drop">
                                            Create activity &nbsp;
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Tables of roles -->
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead class="pal-1 text-col-2">
                                        <tr>
                                            <th style="width: 30%;">Title</th>
                                            <th style="width: 10%;">Type</th>
                                            <th style="width: 10%;">Status</th>
                                            <th style="width: 20%;">Date</th>
                                            <th class="text-center"  style="width: 20%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
												Re-opening of the Online Application for Graduation
											</td>
                                            <td>
												Flag Raising Ceremony
											</td>
                                            <td>
												<button type="button" class="text-white bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-2 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-600 dark:focus:ring-green-800">Done</button>
											</td>
                                            <td>
												09-27-23 12:00 PM -<br> 11-01-23 11:59 PM
											</td>

                                            <td class="text-sm-center">
                                                <button data-toggle="modal" data-target="#modal-xl" type="button" class="px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View</button>
                                                <button data-toggle="modal" data-target="#modal-xl-edit" type="button" class="px-3 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Edit</button>
                                                <button id="button1" type="" class="px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <td class="dataTables_info text-col-1" id="dataTable_info" role="status" aria-live="polite" colspan="12" style="font-size: .9rem;">
                                            Showing x to x of x entries
                                        </td>
                                    </tfoot>

                                </table>
                            </div>
                        </div>
                    </div>
                </section>

                <!--View Modal-->
                <section class="content">
                    <div class="modal fade" id="modal-xl">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">View Modal</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>One fine body&hellip;</p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
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
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <p>One fine body&hellip;</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
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
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Create new activity type</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="height: 500px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label class="required-input">Title</label>
                                                <input type="text" class="form-control" id="title" name="title" placeholder="Title" tabindex="1" required="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label>Description</label>
                                                <textarea type="text" class="form-control" id="inputField" name="description" placeholder="Description" tabindex="1" style="height: 100px;"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label>Location</label>
                                                <input type="text" class="form-control" id="title" name="title" placeholder="Location" tabindex="1" required="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 additional-input">
                                                <label class="required-input">Start time</label>
                                                <input type="datetime-local" class="form-control" id="start_datetime" name="start_datetime"
                                                tabindex="1" value="{{ date("Y-m-d 00:00:00"); }}" min="{{ date("Y-m-d 00:00:00"); }}" data-parsley-excluded="true">
                                            </div>
                                            <div class="form-group col-md-6 additional-input">
                                                <label class="required-input">End time</label>
                                                <input type="datetime-local" class="form-control" id="end_datetime" name="end_datetime"
                                                tabindex="1" value="{{ date("Y-m-d 00:00:00"); }}" min="{{ date("Y-m-d 00:01:00"); }}" data-parsley-excluded="true">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="" id="memo_upload">
                                            <div class="dz-default dz-message"><button class="dz-button" type="button">Drop files here to upload</button></div></div>
                                        </div>


                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-outline-primary swalDefaultSuccess">Save changes</button>
                                </div>
                            </div>
                        <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                </section>


            </div>

    @endsection
