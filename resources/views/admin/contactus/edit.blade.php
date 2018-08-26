@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit What We Do</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('contactus.update', $contactus->id)}}" method="POST">
            {{ csrf_field() }}
          <div class="box-body">

            <div class="form-group">
              <label for="exampleInputdesc">Description</label>
              <input type="hidden" name="_method" value="PATCH" />
              <textarea type="text" class="ckeditor form-control" id="exampleInputdesc" placeholder="description" rows="7" name="desc">{{$contactus->content}}
              </textarea>
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