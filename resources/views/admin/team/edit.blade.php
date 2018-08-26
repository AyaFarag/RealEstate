@extends('admin.layout.dashboard')


@section('contentpages')


<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Team Members</h3>
        </div>

        <form role="form" action="{{ route('team.update', $team->id)}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                        <input type="hidden" name="_method" value="PATCH" /> 
                  <label for="exampleInputname">Name</label>
                  <textarea type="text" class="ckeditor form-control" id="exampleInputname" placeholder="name" name="name" >{{$team->name}}</textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputJobTitle">Job Title</label>
                  <textarea type="text" class="ckeditor form-control" id="exampleInputJobTitle" placeholder="Job Title" name="jobtitle" >{{$team->jobTitle}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Change Image</label>
                    <input type="file" id="exampleInputFile" name="image">
        
                    <p class="help-block"></p>
                    </div>
                    
                    <img style="width:100px; height:100px;" class="card-img-top" src="{{ asset('uploads/team/'. $team->img) }}" alt="Card image cap" />

                  </div>
              <!-- /.box-body -->
    
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>

        </div>



@endsection            