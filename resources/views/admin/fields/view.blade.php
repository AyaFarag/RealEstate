@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">

    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Our Work Fields</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>

            </div>
            <!-- /.box-header -->



            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <thead>
                  <th>#ID</th>
                  <th>Name</th>
                  <th>Action</th>
                  
                </thead>
                @foreach($field as $field)
                <tr>
                  <tbody>
                  <td>{{$field->id}}</td>
                  <td>{{$field->name}}</td>         
                  <td>
                      <a href="{{ route('fields.edit', $field->id)}}" class="btn btn-success" >Edit</a>
                      {{--  &nbsp  --}}
                      <br/><br/>
                      {{--  <a href="{{ route('fields.destroy', $field->id)}}" class="btn btn-danger">Delete</a>  --}}
                      <form action="{{ route('fields.destroy', $field->id)}}" method="POST">
                            {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE" />
                        <button class="btn btn-danger" >Delete</button>
                      </form> 
                </td>
                  
                </tbody>
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      </div>
      <!-- /.box -->

      @endsection