@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">

    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Contact Us</h3>

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
                  <th>Description</th>
                  <th>Created at</th>
                  <th>Updated at</th>

                  <th>Action</th>
                  
                </thead>
                @foreach($contactus as $contactus)
                <tr>
                  <tbody>
                  <td>{{$contactus->id}}</td>
                  <td>{!! $contactus->content !!}</td>
                  <td>{{$contactus->created_at}}</td>
                  <td>{{$contactus->updated_at}}</td>

                  
                  <td>
                      <form action="{{action('ContactUsController@edit', $contactus->id)}}" method="GET" >
                            {{ csrf_field() }}
                        <button class="btn btn-success">Edit</button>
                      </form>
                      &nbsp
                      <form action="{{action('ContactUsController@destroy', $contactus->id)}}" method="POST" >
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