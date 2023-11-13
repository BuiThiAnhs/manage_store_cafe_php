<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Manage Store Café |Nhom 08</title>
    <link rel="shortcut icon" type="image/png" href="{{url('/admin/assets/images/logos/logo.png')}}"/>
    <link rel="shortcut icon" type="image/png" href="{{url('/admin/assets/images/logos/logo.png')}}"/>
    <link rel="stylesheet" href="{{url('/admin/assets/css/styles.min.css')}}" />
    <link href="{{url('admin/assets/DataTables/datatables.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css')}}">
    <script src="{{url('admin/assets/DataTables/datatables.min.js')}}"></script>
</head>

<body>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">
   <!-- Header Start -->
{{--    @yield('header')--}}
    @include('admin.util.headers')

    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
        @include('admin.util.headers_content')
        <!--  Header End -->
        <div class="container-fluid">
            <!--  Content Start -->
            <div id="contents">
                @yield('main-contents')
            </div>
                <!--  Content End-->
            <!--footer start-->
            @include('admin.util.footer')
            <!--footer end-->
        </div>
    </div>
</div>
<script src=""></script>
<script src="{{url('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{url('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('admin/assets/js/sidebarmenu.js')}}"></script>
<script src="{{url('admin/assets/js/app.min.js')}}"></script>
<script src="{{url('admin/assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
<script src=""{{url('admin/assets/libs/simplebar/dist/simplebar.js')}}">
<script src="{{url('/admin/assets/js/dashboard.js')}}"></script>
<script src="{{url('/admin/assets/js/manages.js')}}"></script>
<script src="{{url('https://cdn.jsdelivr.net/npm/sweetalert2@11')}}"></script>
<script>
    $(document).ready(function () {
        $("#cms_table").DataTable();
    });
    // $(document).on("click",".confirmDeletes", function (){
    //     const name = $(this).attr('name');
    //     return confirm("Bạn chắc chắn muốn xóa " + name + "?");
    //
    // });

</script>

</body>

</html>

