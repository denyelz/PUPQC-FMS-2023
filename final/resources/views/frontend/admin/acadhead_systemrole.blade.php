@extends('frontend.layouts.main')

	@section('main-container')

            <!-- Content Wrapper. Outer Container -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row-col-sm-6 mb-2">
                            <div class="col-md-3 ml-4">
                                <h1 class="m-0">System Roles</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main content -->
                <section class="container">
                    <div class="mr-5 ml-5">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title mt-2">List of Roles</h3>
                                <div class="text-right">
                                    <button data-toggle="modal" data-target="#modal-xl-create" type="button" class="px-4 py-2 text-sm font-medium text-center text-white bg-green-800 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Create New Role</button>
                                </div>
                            </div>

                            <div class="card-header row">
                                <p class="card-title ml-4 mt-1 row-cols-2" style="font-size: .9rem;">Show entries</p>
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
                            </div>

                            <!-- Tables of roles -->
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead class="pal-1 text-col-2">
                                        <tr>
                                            <th>Roles</th>
                                            <th style="width: 50%;">Description</th>
                                            <th class="text-center" style="width: 25%;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Academic Head</td>
                                            <td>
                                                <div class="">
                                                    <div class="">
                                                    ... xxx ... xxx ... xxx ...... xxx ... xxx ... xxx ...... xxx ... xxx ... xxx ...
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <button data-toggle="modal" data-target="#modal-xl" type="button" class="px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View</button>
                                                <button data-toggle="modal" data-target="#modal-xl-edit" type="button" class="px-3 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Edit</button>
                                                <button id="button1" type="" class="px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Faculty member</td>
                                            <td>
                                                <div class="">
                                                    <div class="">
                                                    ... xxx ... xxx ... xxx ...... xxx ... xxx ... xxx ...... xxx ... xxx ... xxx ...
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <button data-toggle="modal" data-target="#modal-xl" type="button" class="px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View</button>
                                                <button data-toggle="modal" data-target="#modal-xl-edit" type="button" class="px-3 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Edit</button>
                                                <button id="button2" type="" class="px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Director</td>
                                            <td>
                                                <div class="">
                                                    <div class="">
                                                    ... xxx ... xxx ... xxx ...... xxx ... xxx ... xxx ...... xxx ... xxx ... xxx ...
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <button data-toggle="modal" data-target="#modal-xl" type="button" class="px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View</button>
                                                <button data-toggle="modal" data-target="#modal-xl-edit" type="button" class="px-3 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Edit</button>
                                                <button id="button3" type="" class="px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Staff</td>
                                            <td>
                                                <div class="">
                                                    <div class="">
                                                    ... xxx ... xxx ... xxx ...... xxx ... xxx ... xxx ...... xxx ... xxx ... xxx ...
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <button data-toggle="modal" data-target="#modal-xl" type="button" class="px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View</button>
                                                <button data-toggle="modal" data-target="#modal-xl-edit" type="button" class="px-3 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Edit</button>
                                                <button id="button4" type="" class="px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="text-col-1" style="font-size: .9rem;">
                                        <tr>
                                            <td>
                                                <div class="col-sm-12">
                                                    <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">
                                                        Showing 1 to 4 of 4 entries
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
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
                        <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Create Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" style="height: 400px;">
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
                                            <input type="text" class="form-control" id="description" name="description" placeholder="Description" tabindex="1">
                                        </div>
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
