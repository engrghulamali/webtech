<div class="col-md-3 left_col">
    <div class="left_col scroll-view">

        <div class="navbar nav_title" style="border: 0;">
            <a href="{{'/'}}" class="site_title header_logo" style="background-color:#2a3f54; margin-bottom:10px; height:75px;">
                <span class="big_logo">GRA Infrastructure</span>
                <span class="small_logo" style="display:none; padding-left:10px"><img src="{{asset('assets/admin/admin/fav.png')}}" /></span>
            </a>
        </div>
        <div class="clearfix"></div>
        <!-- menu prile quick info -->
        <div class="profile">
            <div class="profile_pic"><a href="#">
                <img src="{{asset('assets/admin/img.jpg')}}" alt="..." class="img-circle profile_img"></a>
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
            </div>
        </div>
        <!-- /menu prile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>&nbsp;</h3>
                <ul class="nav side-menu">
                    <li><a href="#"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a href="{{url('contacts')}}"><i class="fa fa-envelope"></i>Contact Us</a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i>Solutions</a></li>
                    <li><a><i class="fa fa-newspaper-o"></i>Clients<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="{{url('view-clients')}}">View Clients</a></li>
                            <li><a href="{{url('add-clients')}}">Add Clients</a></li>
                        </ul>
                    </li>
                     <li><a><i class="fa fa-newspaper-o"></i>Home<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="#">Sliders</a></li>
                            <li><a href="#">Services</a></li>
                        </ul>
                    </li>
                   <li><a><i class="fa fa-asterisk"></i> Preferences <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="{{url('preferences')}}">Preferences</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-asterisk"></i> NewsLetters <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="{{url('news')}}">NewsLetters</a></li>
                        </ul>
                    </li>
                    
                   
                    <li><a><i class="fa fa-newspaper-o"></i>Team<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="{{ url('view-team') }}">View TeamMates</a></li>
                            <li><a href="{{ url('add-team') }}">Add TeamMates</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-newspaper-o"></i>Slider<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="{{url('view-slider')}}">Slider</a></li>
                            <li><a href="{{url('add-slider')}}">Add Slider</a></li>
                        </ul>
                    </li>
                     <li><a><i class="fa fa-newspaper-o"></i>Blog<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="{{url('view-blog')}}">Blogs</a></li>
                            <li><a href="{{url('add-blog')}}">Add Blog</a></li>
                        </ul>
                    </li>
            <!--         <li><a><i class="fa fa-newspaper-o"></i>Coffee Notes<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="#">Manage Coffee Notes</a></li>
                            <li><a href="# ">Add Coffee Note</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-newspaper-o"></i>Processes<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="#">Manage Processes</a></li>
                            <li><a href="#">Add Process</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-newspaper-o"></i>Varieties<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="#}">Manage Varieties</a></li>
                            <li><a href="# ">Add Variety</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-newspaper-o"></i>Certifications<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="#">Manage Certificates</a></li>
                            <li><a href="# ">Add Certificate</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-newspaper-o"></i>Products<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="#">Manage Products</a></li>
                            <li><a href="#">Add Products</a></li>
                            <li><a href="#">Detail Products</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-newspaper-o"></i>Training Courses<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="#">Manage Training</a></li>
                            <li><a href="# ">Add Training</a></li>
                            <li><a href="#">Manage Levels</a></li>
                            <li><a href="# ">Add Level</a></li>
                            <li><a href="#">Manage Schedules</a></li>
                            <li><a href="# ">Add Schedule</a></li>
                        </ul>
                    </li> -->
                  <!--   <li><a><i class="fa fa-file"></i> Pages<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="#">Pages</a></li>
                            <li><a href="#">Add Page</a></li>
                        </ul>
                    </li> 
                    <li><a><i class="fa fa-file"></i> Coupons<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="#">Coupons</a></li>
                            <li><a href="#">Add Coupons</a></li>
                        </ul>
                    </li> 
					<li><a><i class="fa fa-image"></i> Slider Images <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="#">Manage Slider Images</a></li>
                            <li><a href="#">Add Slider Images</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-image"></i>FAQ <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="#">Manage FAQ</a></li>
                            <li><a href="#">Add FAQ</a></li>
                        </ul>
                    </li> 
                    <li><a><i class="fa fa-image"></i>Services<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="#">Manage Services</a></li>
                            <li><a href="#">Add Service</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-image"></i>Clients<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="#">Manage Clients</a></li>
                            <li><a href="#">Add Client</a></li>
                        </ul>
                    </li>
 -->               <!--      <li><a><i class="fa fa-newspaper-o"></i>Media<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="#">Manage Media</a></li>
                            <li><a href="#">Add Media</a></li>
                        </ul>
                    </li>
				<li><a><i class="fa fa-asterisk"></i> Preferences <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="#">Preferences</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="#">Manage Users</a></li>
                            <li><a href="#">Add User</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-users"></i> Trainers <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="#">Manage Trainers</a></li>
                            <li><a href="#">Add Trainers</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-users"></i>Trainee Users <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="#">Manage Trainee Users</a></li> -->
                           <!--  <li><a href="{{ url('admin/addUser') }}">Add User</a></li> -->
                   <!--      </ul>
                    </li>
                    <li><a><i class="fa fa-gear"></i> Settings <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="#">Change Password</a></li>
                        </ul>
                    </li> -->

                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->
        <!-- /menu footer buttons -->
       <!--  <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="#">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div> -->
        <!-- /menu footer buttons -->
    </div>
</div>