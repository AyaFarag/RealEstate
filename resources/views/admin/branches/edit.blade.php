@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Branches</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('branches.update', $branch->id)}}" method="POST">
            {{ csrf_field() }}
          <div class="box-body">
                <input type="hidden" name="_method" value="PATCH" />
            <div class="form-group">
                <label for="exampleInputname">Name</label>
                <textarea type="text" class="ckeditor form-control" id="exampleInputname" placeholder="name" name="name" >{{$branch->name}}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" value="{{$branch->email}}">
            </div>
            <div class="form-group">
                <label for="exampleInputphone">Phone Number 1</label>
                <input type="text" class="form-control" id="exampleInputphone" placeholder="phone number 1" name="number" value="{{$phone->number}}">
            </div>
            {{--  <div class="form-group">
                <label for="exampleInputphone">Phone Number 2 <small>Optional</small></label>
                <input type="text" class="form-control" id="exampleInputphone" placeholder="phone number 2" name="number[]" value="">
            </div>  --}}
            <div class="form-group">
                <label for="exampleInputdesc">Address</label> 
                <textarea type="text" class="ckeditor form-control" id="exampleInputdesc" placeholder="description" rows="7" name="address">{{$branch->address}}
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