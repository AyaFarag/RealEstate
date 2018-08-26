@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Our Works</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('ourwork.update', $ourwork->id)}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
          <div class="box-body">
            <div class="row">
            <div class="col col-md-6">

                <label >Field Name</label>
                <select class="form-control" name="field">
                    @foreach($field as $field)
                        <option value="{{$field->id}}">{{$field->name}}</option>    
                    @endforeach
                </select>
              </div>  
            </div>
              <br/>
            <div class="form-group">
                <input type="hidden" name="_method" value="PATCH" />
                <label for="exampleInputFile">Change Image</label>
                <input type="file" id="exampleInputFile" name="image">
    
                <p class="help-block"></p>
            </div>
                
                <img style="width:100px; height:100px;" class="card-img-top" src="{{ asset('uploads/ourworks/'. $ourwork->img) }}" alt="Card image cap" />
    
    

          </div>      
    


          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
      <!-- /.box -->

@endsection