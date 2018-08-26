@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add New Branch</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('branches.store')}}" method="POST">
            {{ csrf_field() }}
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputname">Name</label>
              <textarea type="text" class="ckeditor form-control" id="exampleInputname" placeholder="name" name="name"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="exampleInputphone">Phone Number 1</label>
                <input type="text" class="form-control" id="exampleInputphone" placeholder="phone number 1" name="number">
            </div>
            {{-- <div class="form-group">
                <label for="exampleInputphone">Phone Number 2 <small>Optional</small></label>
                <input type="text" class="form-control" id="exampleInputphone" placeholder="phone number 2" name="number">
            </div> --}}
            <div class="form-group">
              <label for="exampleInputdesc">Address</label>
              <textarea type="text" class="ckeditor form-control" id="exampleInputdesc" placeholder="address" rows="3" name="address"></textarea>
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