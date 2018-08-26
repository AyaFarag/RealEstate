@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add New Field</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('fields.store')}}" method="POST">
            {{ csrf_field() }}
          <div class="box-body">

            <div class="form-group">
              <label for="exampleInputdesc">Name</label>
              <input type="text" class="form-control" id="exampleInputdesc" placeholder="Field Name" name="name"/>
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