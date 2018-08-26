@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add New Slider</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('slider.update', $slider->id)}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
          <div class="box-body">
            <div class="form-group">
              <input type="hidden" name="_method" value="PATCH" />
              <label for="exampleInputTitle">Title</label>
              <textarea type="text" class="ckeditor form-control" id="exampleInputTitle" placeholder="Title" name="title">{{$slider->title}}</textarea>
            </div>
            {{--    --}}
          <div class="form-group">
            <div class="row">
                <div class="col-md-12">
                  <div class="">
                      <label for="editor1" class="">Description</label>
                      <textarea id="editor1" type="text" class="ckeditor form-control" placeholder="description" rows="1" cols="" name="desc">{{$slider->description}}</textarea>
                      </div>
                  <!-- /.box -->
               </div>
            </div>
          </div>
            {{--    --}}
            <div class="form-group">
                    <label for="exampleInputFile">Change Image</label>
                    <input type="file" id="exampleInputFile" name="image">
        
                    <p class="help-block"></p>
                    </div>
                    
                    <img style="width:100px; height:100px;" class="card-img-top" src="{{ asset('uploads/slider/'. $slider->img) }}" alt="Card image cap" />


          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.box -->

      @endsection