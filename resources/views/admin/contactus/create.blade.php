@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add Content</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('contactus.store')}}" method="POST">
            {{ csrf_field() }}
          <div class="box-body">

            <div class="form-group">
              <label for="exampleInputdesc">Description</label>
              <textarea type="text" class="ckeditor form-control" id="exampleInputdesc" placeholder="description" rows="5" name="desc"></textarea>
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