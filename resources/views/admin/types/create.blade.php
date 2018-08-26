@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add New Course Type</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('type.store')}}" method="POST">
            {{ csrf_field() }}
          <div class="box-body">

            <div class="form-group">
              <label for="exampleInputdesc">Name</label>
              <textarea type="text" class="ckeditor form-control" id="exampleInputdesc" placeholder="Field Name" name="typename"></textarea>
            </div>


          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.box -->

      @endsection