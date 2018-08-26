@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit What We Do</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('whatWeDo.update', $whatwedo->id)}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
          <div class="box-body">
            <div class="form-group">
              <input type="hidden" name="_method" value="PATCH" />  
              <label for="exampleInputTitle">Title</label>
              <textarea type="text" class="ckeditor form-control" id="exampleInputTitle" placeholder="Title" name="title">{{$whatwedo->title}}</textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputdesc">Description</label>
              <textarea type="text" class="ckeditor form-control" id="exampleInputdesc" placeholder="description" rows="3" name="desc">{{$whatwedo->describtion}}
              </textarea>
            </div>

             <div class="form-group">
              <label for="exampleInputFile">Change Image</label>
              <input type="file" id="exampleInputFile" name="image">

              <p class="help-block"></p>
             </div>
            
            <img style="width:100px; height:100px;" class="card-img-top" src="{{ asset('uploads/whatwedo/'. $whatwedo->img) }}" alt="Card image cap" />


          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
      <!-- /.box -->

      @endsection