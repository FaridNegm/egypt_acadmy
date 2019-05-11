<!DOCTYPE html>
<html lang="en" dir="rtl">

<!-- Mirrored from demo.interface.club/limitless/demo/bs3/Template/layout_1/RTL/default/full/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2019 08:59:09 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
        @yield('title')
    </title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ url('Admin') }}/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="{{ url('Admin') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="{{ url('Admin') }}/css/core.min.css" rel="stylesheet" type="text/css">
	<link href="{{ url('Admin') }}/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="{{ url('Admin') }}/css/colors.min.css" rel="stylesheet" type="text/css">
	<link href="{{ url('Admin') }}/css/style.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Changa:500|El+Messiri|Harmattan|Mada:600|Tajawal:700" rel="stylesheet">


    @yield('header')
</head>

<body>

    @include('Admin/layouts/navbar')

    <!-- Page container -->
	<div class="page-container">
		<!-- Page content -->
		<div class="page-content">

            @include('Admin/layouts/sidebar')

            @yield('content')

            @include('Admin/layouts/footer')

        </div><!-- Page content -->
    </div><!-- Page container -->


    <!-- Core JS files -->
	<script src="{{ url('Admin') }}/js/plugins/loaders/pace.min.js"></script>
	<script src="{{ url('Admin') }}/js/core/libraries/jquery.min.js"></script>
	<script src="{{ url('Admin') }}/js/core/libraries/bootstrap.min.js"></script>
	<script src="{{ url('Admin') }}/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ url('Admin') }}/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="{{ url('Admin') }}/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="{{ url('Admin') }}/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="{{ url('Admin') }}/js/plugins/ui/moment/moment.min.js"></script>
	<script src="{{ url('Admin') }}/js/plugins/pickers/daterangepicker.js"></script>

    <!-- Theme JS files -->
    <script src="{{ url('Admin') }}/js/plugins/forms/styling/uniform.min.js"></script>
    <script src="{{ url('Admin') }}/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="{{ url('Admin') }}/js/plugins/forms/styling/switch.min.js"></script>

    <!-- Theme JS files -->
	<script src="{{ url('Admin') }}/js/plugins/notifications/noty.min.js"></script>
	<script src="{{ url('Admin') }}/js/plugins/notifications/jgrowl.min.js"></script>

    <script src="{{ url('Admin') }}/js/app.js"></script>
    <script src="{{ url('Admin') }}/js/demo_pages/components_notifications_other.js"></script>
    <script src="{{ url('Admin') }}/js/demo_pages/form_checkboxes_radios.js"></script>
    <script src="{{ url('Admin') }}/js/demo_pages/uploader_bootstrap.js"></script>
	<script src="{{ url('Admin') }}/js/demo_pages/dashboard.js"></script>
    <!-- /theme JS files -->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @yield('footer')

</body>

</html>
