@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add New Member</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('team.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputname">Name</label>
              <textarea type="text" class="ckeditor form-control" id="exampleInputname" placeholder="name" name="name"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputJobTitle">Job Title</label>
              <textarea type="text" class="ckeditor form-control" id="exampleInputJobTitle" placeholder="Job Title" name="jobtitle"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Photo</label>
              <input type="file" id="exampleInputFile" name="image">

              <p class="help-block"></p>
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