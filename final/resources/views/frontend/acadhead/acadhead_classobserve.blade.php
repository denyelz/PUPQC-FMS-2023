@extends('frontend.layouts.main')

	@section('main-container')

            <!-- Content Wrapper. Outer Container -->
            <div class="content-wrapper">

                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row-col-sm-6 mb-2">
                            <div class="col-md-3 ml-4">
                                <h1 class="m-0">Observation Dashboard</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main content -->
                <section class="container">
                    <div class="mr-5 ml-5">
                        <div class="card">
                            <div class="card-header">

                                <!-- Date range -->
                                <div class="row justify-content-between" style="height: 40px;">
                                    <div class="btn-group btn-group-sm">
                                        <div>
                                            <p class="text-dark pl-3 pr-2 mt-2">Date From:</p>
                                        </div>&nbsp;&nbsp;
                                        <div>
                                            <input type="date" class="form-control date-range-filter" id="date_from" name="date_from" placeholder="date" tabindex="1" required>
                                        </div>&nbsp;&nbsp;
                                        <div>
                                            <p class="text-dark pl-3 pr-2 mt-2">Date To: </p>
                                        </div>&nbsp;&nbsp;
                                        <div>
                                            <input type="date" class="form-control date-range-filter" id="date_to" name="date_to" placeholder="date" tabindex="1" required>
                                        </div>
                                        <div>
                                            <button id="btnDateReset" type="button" class="text-col-1 btn btn-secondary btn-s p-drop ml-2 mb-5 pr-3 mt-1">Reset</button>
                                        </div>

                                    </div>

                                    <div class="btn-group btn-group-sm">
                                        <div>
                                            <button type="button" class="text-col-1 btn btn-block btn-warning btn-s p-drop">Pending</button>
                                        </div>
                                        <div>
                                            <button type="button" class="text-col-1 btn btn-block btn-danger btn-s p-drop">Cancelled</button>
                                        </div>
                                        <div>
                                            <button type="button" class="text-col-1 btn btn-block btn-info btn-s p-drop">Ongoing</button>
                                        </div>
                                        <div>
                                            <button type="button" class="text-col-1 btn btn-block btn-success btn-s p-drop">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                            </div>

                            <!-- Tables of roles -->
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead class="pal-1 text-col-2">
                                        <tr>
                                            <th>Faculty</th>
                                            <th>Date of Observation</th>
                                            <th>Asgmt Code</th>
                                            <th>Subject Title</th>
                                            <th>Year & Sec</th>
                                            <th>Room</th>
                                            <th>Subject Schedule</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
												Cherry Doromal
											</td>
                                            <td>
												Jan 16, 2024
											</td>
                                            <td>
												P
											</td>
                                            <td>
												Web Development
											</td>
                                            <td>
												BSIT 2-2
											</td>
                                            <td>
												ACAD - 202
											</td>
                                            <td>
												Tues - 11:30AM-12:00PM
											</td>
                                            <td>
												<button type="button" class="text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-2 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-600 dark:focus:ring-red-800">Cancelled</button>
											</td>


                                            <td class="text-center">
                                                <button data-toggle="modal" data-target="#modal-xl" type="button" class="px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View</button>
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


            </div>

            <!-- Footer Container -->
            <footer class="main-footer">
                <strong>Faculty Records & Monitoring System &copy; 2024 <a href="https://pup.edu.ph">PUPQC.</a></strong>
                    All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 2.2.0
                </div>
            </footer>
        </div>

    @endsection
