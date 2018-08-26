@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">

    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Branches</h3>

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
                  <th>Email</th>
                  <th>Phones</th>
                  <th>Address</th>
                  <th>Action</th>
                  
                </thead>
                @foreach($branch as $branch)
                <tr>
                  <tbody>
                  <td>{{$branch->id}}</td>
                  <td>{!! $branch->name !!}</td>
                  <td>{{$branch->email}}</td>
                  <td>
                    {{ $branch->numbers }}
                  </td>

                  {{--  @foreach($phone as $phone)  --}}
                  {{--  <td>{{$branch->phone->number}}</td>  --}}
                  {{--  @endforeach  --}}
                  <td>{!! $branch->address !!}</td>


                  
                  <td>
                      <form action="{{route('branches.edit', $branch->id)}}" method="GET" >
                            {{ csrf_field() }}
                        <button class="btn btn-success">Edit</button>
                      </form>
                      &nbsp
                      <form action="{{route('branches.destroy', $branch->id)}}" method="POST" >
                            {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE" />
                        <button class="btn btn-danger">Delete</button>
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