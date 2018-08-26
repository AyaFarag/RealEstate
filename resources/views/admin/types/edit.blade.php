@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Course Type</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('type.update', $type->id)}}" method="POST">
            {{ csrf_field() }}
          <div class="box-body">

            <div class="form-group">
              <input type="hidden" name="_method" value="PATCH" />
              <label for="exampleInputdesc">Name</label>
              <textarea type="text" class="ckeditor form-control" id="exampleInputdesc" placeholder="Type Name" rows="7" name="typename" >{{$type->name}}</textarea>
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