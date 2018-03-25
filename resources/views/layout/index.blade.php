<!DOCTYPE html>
<html>
<head>
@include('layout.head')
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

@include('layout.header')

@include('layout.side')

@yield('content')

@include('layout.footer')
@include('layout.control')

 
</div>
<!-- ./wrapper -->

@include('layout.script')
</body>
</html>
