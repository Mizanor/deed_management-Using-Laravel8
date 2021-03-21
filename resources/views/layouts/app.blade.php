
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>

    <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @livewireStyles

        

    {{-- Adminlte --}}

  <link rel="stylesheet" href="{{ asset('public/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/dist/css/adminlte.min.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  {{-- yazra datatable --}}
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

  {{-- boorstrap datatable --}}

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css"/>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />

{{--DatePiceker --}}
<link rel="stylesheet" href="{{ asset('public/datepicker/css/bootstrap.css') }}" >
<link rel="stylesheet" href="{{ asset('public/datepicker/css/datepicker.css') }}" >

    


  <!-- Scripts jetstream -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        {{-- sweetalert --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

    



    <body class="hold-transition sidebar-mini layout-fixed">

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-dropdown')

            <!-- Page Heading -->
            {{-- <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header> --}}

            <!-- Page Content -->
            <main>
                <aside class="main-sidebar sidebar-dark-primary elevation-4">
                    <!-- Brand Logo -->

                    {{-- <a href="index3.html" class="brand-link">
                    <img src="public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                        style="opacity: .8">
                    <span class="brand-text font-weight-light">AdminLTE 3</span>
                    </a> --}}
                    



                    <!-- Sidebar -->
                    @include('layouts.sidebar')
                    <!-- /.sidebar -->
                </aside>
                <div class="wrapper">

                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <!-- Content Header (Page header) -->
                    
    <!-- /.content-header -->

                    {{-- Content Area --}}
                    {{ $slot }}
                    
                    </div>

                </div>
                                




                
                <footer class="main-footer">
                    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
                    All rights reserved.
                    <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 3.0.5
                    </div>
                </footer>
                   
               

                


            </main>
            
        </div>
       

           
            
               
@stack('modals')

        @livewireScripts
<script src="{{ asset('public/plugins/jquery/jquery.min.js') }}"></script> 
<script src="{{ asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> 
<script src="{{ asset('public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script> 
<script src="{{ asset('public/dist/js/adminlte.js') }}"></script> 
<script src="{{ asset('public/dist/js/demo.js') }}"></script> 

<script src="{{ asset('public/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script> 
<script src="{{ asset('public/plugins/raphael/raphael.min.js') }}"></script> 
<script src="{{ asset('public/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script> 
<script src="{{ asset('public/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script> 
<script src="{{ asset('public/dist/js/pages/dashboard2.js') }}"></script> 



{{-- yazra datatable --}}
<!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <!-- App scripts -->
        @stack('scripts')

<script type="text/javascript">
  $(document). ready(function(){
    $('#image').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#showImage').attr('src',e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });
  });
</script>



{{-- Boorstrap Datatable --}}
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.js"></script>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
{{-- toaster --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script> 
<script>
        @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type){
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;

                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;

                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>

{{-- Sweet Alert2 --}}
<script type="text/javascript">
  $(function(){
    $(document).on ('click', '#delete',function(e){
      e.preventDefault();
      var link = $(this).attr("href");
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {
          window.location.href = link;
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
            )
          }
        })
    });
  });
</script>

{{-- DatePicker --}}
    <script  src="{{ asset('public/datepicker/js/bootstrap-datepicker.js') }}"></script>
	<script>
			$(function() {
			$('.datepickr').datepicker();
		});
</script>
</body>
</html>


