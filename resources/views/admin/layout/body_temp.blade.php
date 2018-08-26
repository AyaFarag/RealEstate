<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header" >

    <!-- Logo -->
    <a href="#" class="logo" style="background-color: #d82020;">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin Panel</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation" style="background-color: #d82020;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <i class="fa fa-down"></i> 
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Logout</span>
            </a>
            <ul class="dropdown-menu">

              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <span>Are you sure to logout?</span>


                <div class="pull-right">
                  
                  <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf
               </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle=""><i class="fa fa-caret-down"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
<!--================================================================================================================================================-->
@include('admin.message')
{{--  -------------------------------------------------------------------------------------------------------------------------------  --}}
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="background-color: #000">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->


      

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <!-- Optionally, you can add icons to the links -->

        {{--  Slider  --}}
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Slider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/slider')}}">View Slider</a></li>
            <li><a href="{{ url('/slider/create')}}">+ Add Slider</a></li>
            
          </ul>
        </li>
        {{--  what we do  --}}
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>What We Do</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/whatWeDo')}}">View What We Do</a></li>
            <li><a href="{{ url('/whatWeDo/create')}}">+ Add What We Do</a></li>
            
          </ul>
        </li>
        {{--  about  --}}
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>About</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/about')}}">View About</a></li>
            <li><a href="{{ url('/about/create')}}">+ Add About</a></li>
            
          </ul>
        </li>
        {{--  about  --}}
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>About Our Courses</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/aboutcourses')}}">View About Courses</a></li>
            {{--  <li><a href="{{ url('/aboutcourses/create')}}"> Update About Courses </a></li>  --}}
            
          </ul>
        </li>
        {{--  fields  --}}
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Our Work Fields</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/fields')}}">View Fields</a></li>
            <li><a href="{{ url('/fields/create')}}">+ Add New Field</a></li>
            
          </ul>
        </li>
        {{--  Our Work  --}}
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Our Work</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/ourwork')}}">View Our Work</a></li>
            <li><a href="{{ url('/ourwork/create')}}">+ Add Our Work</a></li>
            
          </ul>
        </li>
        {{--  Our Services  --}}
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Our Services</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/services')}}">View Our Services</a></li>
            <li><a href="{{ url('/services/create')}}">+ Add Our Services</a></li>
            
          </ul>
        </li>
        {{--  Course typs  --}}
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Course Types</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/type')}}">View Course Types</a></li>
            <li><a href="{{ url('/type/create')}}">+ Add Course Types</a></li>
            
          </ul>
        </li>
        {{--  Course Slider  --}}
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Course Sliders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/courseslider')}}">View Course Sliders</a></li>
            <li><a href="{{ url('/courseslider/create')}}">+ Add Course Slider</a></li>
            
          </ul>
        </li>
        {{--  Courses  --}}
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Courses</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/courses')}}">View Courses</a></li>
            <li><a href="{{ url('/courses/create')}}">+ Add Courses</a></li>
            
          </ul>
        </li>
        {{--  team  --}}
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Team</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/team')}}">View Team</a></li>
            <li><a href="{{ url('/team/create')}}">+ Add New Team Member</a></li>
            
          </ul>
        </li>
        {{--  contact us   --}}
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Contact Us</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/contactus')}}">View Contact us</a></li>
            <li><a href="{{ url('/contactus/create')}}">+ Add contact us</a></li>
            
          </ul>
        </li>
        {{--  Branches  --}}
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Branches</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/branches')}}">View Branches</a></li>
            <li><a href="{{ url('/branches/create')}}">+ Add New Branch</a></li>
            
          </ul>
        </li>
        {{--  Subscribers  --}}
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Subscribers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/subscribers')}}">View Subscribers</a></li>
            
          </ul>
        </li>

        




        {{--  <li class="active"><a href="{{ url('/admin/home')}}"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>

        <li class="active"><a href="{{ url('/firm') }}"><i class="fa fa-link"></i> <span>+ Add New Firm Account</span></a></li>

        <li><a href="{{ url('/all/firms')}}"><i class="fa fa-link"></i> <span>All Firms</span></a></li>  --}}
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
