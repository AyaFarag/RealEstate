@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">
        <div class="row">
                <div class="col-xs-12">
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title"> About Company</h3>
        
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
                          <th>Image</th>
        
                          <th>Action</th>
                          
                        </thead>
                        {{-- @foreach($about as $about) --}}
                        <tr>
                          <tbody>
                          <td>{{$about->id}}</td>
                          <td>{!! $about->content !!}</td>
                          <td >
                              <img style="width:100px; height:100px;" class="card-img-top" src="{{ asset('uploads/about/'. $about->img) }}" alt="Card image cap" />
                          </td>
                          
                          <td>
                              <form action="{{route('about.edit', $about->id)}}" method="GET" >
                                    {{ csrf_field() }}
                                <button class="btn btn-success">Edit</button>
                              </form>
                              &nbsp
                              <form action="{{route('about.destroy', $about->id)}}" method="POST" >
                                    {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE" />
                                <button class="btn btn-danger">Delete</button>
                              </form>
                        </td>
                          
                        </tbody>
                        </tr>
                        {{-- @endforeach --}}
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