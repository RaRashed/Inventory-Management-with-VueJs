
        <script src="{{ mix('js/app.js') }}"></script>

<script src="{{asset ('asset/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset ('asset/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{asset ('asset/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('asset/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('asset/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('asset/lugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script>
     $(".datatable").DataTable({
      "responsive": true,
      "autoWidth": false,
     });
</script>
<script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>
@stack('scripts')
