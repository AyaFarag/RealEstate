@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add About Courses</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{route('aboutcourses.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputtilte">Title</label>
              <textarea type="text" class="ckeditor form-control" id="exampleInputtilte" placeholder="tilte" name="title"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputdesc">Content</label>
              <textarea type="text" class="ckeditor form-control" id="exampleInputdesc" rows="3" name="content"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Image</label>
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