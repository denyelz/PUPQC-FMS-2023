            <!-- Footer Container -->
            <footer class="main-footer">
                <strong>Faculty Records & Monitoring System &copy; 2024 <a href="https://pup.edu.ph">PUPQC.</a></strong>
                    All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 2.2.0
                </div>
            </footer>
        </div>

        <!-- jQuery -->
        <script src="../plugins/jquery/jquery.min.js"></script>

        <!-- jQuery UI 1.11.4 -->
        <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>

        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>

        $.widget.bridge('uibutton', $.ui.button)
        </script>

        <!-- Bootstrap 4 -->
        <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Sparkline -->
        <script src="../plugins/sparklines/sparkline.js"></script>

        <!-- JQVMap -->
        <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>

        <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

        <!-- jQuery Knob Chart -->
        <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>

        <!-- daterangepicker -->
        <script src="../plugins/moment/moment.min.js"></script>

        <script src="../plugins/daterangepicker/daterangepicker.js"></script>

        <!-- Tempusdominus Bootstrap 4 -->
        <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Summernote -->
        <script src="../plugins/summernote/summernote-bs4.min.js"></script>

        <!-- overlayScrollbars -->
        <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

        <!-- Main Script -->
        <script src="../asset/js/farms.js"></script>

        <!-- PAGE PLUGINS -->
        <!-- jQuery Mapael -->
        <script src="../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
        <script src="../plugins/raphael/raphael.min.js"></script>
        <script src="../plugins/jquery-mapael/jquery.mapael.min.js"></script>
        <script src="../plugins/jquery-mapael/maps/usa_states.min.js"></script>

        <!-- ChartJS -->
        <script src="../plugins/chart.js/Chart.min.js"></script>

        <!-- Flowbite Js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

        <!-- sweetalert2 logout -->
        <script src="../asset/js/sweetalert.logout.js"></script>

        <!-- FARMS DB 1-->
        <script src="../asset/js/pages/dashboard.js"></script>

        <!-- FARMS DB 2 -->
        <script src="../asset/js/pages/dashboard2.js"></script>

        <!-- DB Chart for Summary  -->
        <script src="../dist/js/db_summaryChart.js"></script>

        <!-- SWEETALERTS SCRIPTS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

        <!-- Local script for warning modals -->
        <script src="../asset/js/farms.swal.warning.modal.js"></script>

        <!-- Local script for success modals -->
        <script src="../asset/js/farms.swal.success.modal.js"></script>

        <script>
            document.getElementById('show-modal').addEventListener('click', function() {
                Swal.fire({
                    title: 'Are you sure?',
                    icon: 'info',
                    html:
                    'Do you want to <b>Log out</b>?',
                    // '<a href="landing_page.html">links</a> ' +
                    // 'and other HTML tags'
                    showCloseButton: true,
                    showCancelButton: true,
                    focusConfirm: false,
                    confirmButtonText: 'Yes',
                    confirmButtonColor: '#3085d6',
                    confirmButtonAriaLabel: '...',
                    // cancelButtonText:
                    // '<i class="fa fa-thumbs-down"></i>',
                    cancelButtonColor: '#d33',
                    cancelButtonAriaLabel: '...'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.replace("../landing_page.html");
                    }})
                });
        </script>

    </body>
</html>
