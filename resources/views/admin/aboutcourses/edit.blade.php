@extends('admin.layout.dashboard')

@section('contentpages')

<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit About Courses</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('aboutcourses.update', $aboutcourses->id)}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
          <div class="box-body">
            <div class="form-group">
              <input type="hidden" name="_method" value="PATCH" /> 
              <label for="exampleInputtilte">Title</label>
              <textarea type="text" class="ckeditor form-control" id="exampleInputtilte" placeholder="tilte" name="title" >{{$aboutcourses->title}}</textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputdesc">Content</label>
              <textarea type="text" class="ckeditor form-control" id="exampleInputdesc" rows="3" name="content">{{$aboutcourses->content}}</textarea>
            </div>
          <div class="form-group">
           <label for="exampleInputFile">Change Image</label>
            <input type="file" id="exampleInputFile" name="image">

            <p class="help-block"></p>
          </div>
            
           <img style="width:100px; height:100px;" class="card-img-top" src="{{ asset('uploads/aboutcourses/'. $aboutcourses->img) }}" alt="Card image cap" />
  

          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
      <!-- /.box -->

      @endsection