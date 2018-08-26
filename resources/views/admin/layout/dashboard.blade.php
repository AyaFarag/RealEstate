@extends('admin.layout.app')

@section('pages')



<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
    </section>





    <!-- Page content starts here-->
    <!-- Main content -->
    <section class="content container-fluid">
      

      @yield('contentpages')

      
      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
    <!-- Page content starts here-->






  </div>
  <!-- /.content-wrapper -->
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

@endsection






