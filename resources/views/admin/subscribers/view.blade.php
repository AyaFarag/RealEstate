@extends('admin.layout.dashboard')


@section('contentpages')

<div class="box box-primary">
        <div class="row">
                <div class="col-xs-12">
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Subscribers</h3>
        
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
                          <th>Email</th>  
                        </thead>
                        @foreach($subscriber as $subscriber)
                        <tr>
                          <tbody>
                          <td>{{$subscriber->id}}</td>
                          <td>{{$subscriber->email}}</td>
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