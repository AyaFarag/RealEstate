@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Fields</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('fields.update', $field->id)}}" method="POST">
            {{ csrf_field() }}
          <div class="box-body">

            <div class="form-group">
              <label for="exampleInputdesc">Name</label>
              <input type="hidden" name="_method" value="PATCH" />
              <input type="text" class="form-control" id="exampleInputdesc" placeholder="Field Name" rows="7" name="name" value="{{$field->name}}"/>
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