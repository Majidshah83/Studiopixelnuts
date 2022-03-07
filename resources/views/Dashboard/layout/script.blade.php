<!-- jQuery -->

<!-- jQuery UI 1.11.4 -->
<!-- <script src="{{asset('public/dashbord/plugins/jquery-ui/jquery-ui.min.js')}}"></script> -->

<!-- Bootstrap 4 -->
<script src="{{asset('public/dashbord/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- daterangepicker -->
<script src="{{asset('public/dashbord/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('public/dashbord/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('public/dashbord/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('public/dashbord/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('public/dashbord/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/dashbord/dist/js/adminlte.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('public/dashbord/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/dashbord/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/dashbord/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('public/dashbord/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{asset('public/dashbord/dist/js/demo.js')}}"></script>

<script>
$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
    });
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});
</script>
