@include('layouts.adminlayout.header')
<body class="nav-md">
<div class="container body">
	<div class="main_container">
		@include('layouts.adminlayout.left')
		
		<!-- top navigation -->
		@include('layouts.adminlayout.top')
		<!-- /top navigation --> 
		
		<!-- page content -->
		<div class="right_col" role="main" style="min-height:750px"> <br />
			@yield('content')
			
			<!-- footer content -->
			@include('layouts.adminlayout.footer')
			<!-- /footer content --> 
		</div>
		<!-- /page content --> 
	</div>
</div>
<div id="custom_notifications" class="custom-notifications dsp_none">
	<ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
	</ul>
	<div class="clearfix"></div>
	<div id="notif-group" class="tabbed_notifications"></div>
</div>
@include('layouts.adminlayout.scripts')
@yield('script')
<!-- /datepicker -->
</body>
</html>