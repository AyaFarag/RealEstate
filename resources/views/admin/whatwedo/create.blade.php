@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add New What We Do</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('whatWeDo.store')}}" method="POST" enctype="multipart/form-data" >
            {{ csrf_field() }}
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputTitle">Title</label>
              <textarea type="text" class="ckeditor form-control" id="exampleInputTitle" placeholder="Title" name="title"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputdesc">Description</label>
              <textarea type="text" class="ckeditor form-control" id="exampleInputdesc" placeholder="description" rows="3" name="desc"></textarea>
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