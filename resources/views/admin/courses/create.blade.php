@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add New Slider</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('courses.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
          <div class="box-body">
              <div class="row">
                  <div class="col col-md-6">
                      <label >Course Type</label>
                      <select class="form-control" name="type">
                          @foreach($type as $type)
                              <option value="{{$type->id}}">{!!strip_tags($type->name)!!}</option>    
                          @endforeach
                       </select>
                       <br/>
                  </div>  
                </div>    
      
      
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <input type="file" id="exampleInputFile" name="image">
      
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