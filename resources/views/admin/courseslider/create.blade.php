@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add New Slider</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('courseslider.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            {{--    --}}
          <div class="form-group">
            <div class="row">
                <div class="col-md-12">
                  <div class="box-body">
                      <label for="editor11" class="">Name</label>
                      <textarea id="editor11" type="text" class="ckeditor form-control" placeholder="Title" rows="1" cols="" name="title"></textarea>
                      </div>
                  <!-- /.box -->
               </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <div class="col-md-12">
                  <div class="box-body">
                      <label for="editor1" class="">Description</label>
                      <textarea id="editor1" type="text" class=" ckeditor form-control" placeholder="description" rows="1" cols="" name="desc"></textarea>
                      </div>
                  <!-- /.box -->
               </div>
            </div>
          </div>
            {{--    --}}
            <div class="form-group">
              <label for="exampleInputFile">Slider Image</label>
              <input type="file" id="exampleInputFile" name="image" >

              <p </p>
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