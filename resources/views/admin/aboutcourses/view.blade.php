@extends('admin.layout.dashboard')

@section('contentpages')


<div class="box box-primary">

    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> Our Courses</h3>


            </div>
            <!-- /.box-header -->



            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <thead>
                  <th>#ID</th>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Image</th>

                  <th>Action</th>
                  
                </thead>

                <tr>
                  <tbody>
                  <td>{{$aboutcourses->id}}</td>
                  <td>{!! $aboutcourses->title !!}</td>
                  <td>{!! $aboutcourses->content !!} </td>
                  <td ><img style="width:100px; height:100px;" class="card-img-top" src="{{ asset('uploads/aboutcourses/'. $aboutcourses->img) }}" alt="Card image cap" /></td>
                  

                  
                  <td>
                      <form action="{{route('aboutcourses.edit', $aboutcourses->id)}}" method="GET" >
                            {{ csrf_field() }}
                        <button class="btn btn-success">Edit</button>
                      </form>
                      &nbsp
                      {{--  <form action="{{route('aboutcourses.destroy', $aboutcourses->id)}}" method="POST" >
                            {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE" />
                        <button class="btn btn-danger">Delete</button>
                      </form>  --}}
                </td>
                  
                </tbody>
                </tr>

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