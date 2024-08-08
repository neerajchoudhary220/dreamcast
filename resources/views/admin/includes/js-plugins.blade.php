

  <!-- plugins:js -->
  <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  {{-- <script src="{{ asset('assets/vendors/chart.js/Chart.min.js')}}"></script> --}}
  {{-- <script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js')}}"></script> --}}
  {{-- <script src="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script> --}}
  {{-- <script src="{{ asset('assets/js/dataTables.select.min.js')}}"></script> --}}
  <script src="{{ asset('assets/js/datatable/jquery.dataTables.min.js') }}">
  <script src="{{ asset('assets/js/datatable/dataTables.bootstrap4.min.js') }}">

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('assets/js/off-canvas.js')}}"></script>
  <script src="{{ asset('assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('assets/js/template.js')}}"></script>
  <script src="{{ asset('assets/js/settings.js')}}"></script>
  <script src="{{ asset('assets/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('assets/js/sweet-alert.js')}}">

  <script src="{{ asset('assets/js/dashboard.js')}}"></script>
  <script src="{{ asset('assets/js/other/custom.js')}}"></script>


  @stack('additional-js')