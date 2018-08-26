<div class="row align-items-center m-0 py-5 contact-information">
        <div class="col-md-4 p-0"> <img class="img-fluid" src="/images/logo-foo.png"> </div>
        <div class="col-md-4 p-0">

          @foreach($branches as $branch)
         <h3 class="text-left text-capitalize font-weight-bold">{!!$branch->name!!}</h3>
          <div class="col-12 py-1 px-0"> <i class="fa fa-envelope float-left d-inline"></i>
            <p class="d-inline px-1 py-0 m-0">{{$branch->email}}</p>
          </div>
          <div class="col-12 py-1 px-0"> <i class="fa fa-mobile float-left d-inline"></i>
            <p class="d-inline px-1 m-0 py-0">{{$branch->numbers}}</p>
            
          </div>
          <div class="col-12 py-1 px-0"> <i class="fa fa-map-marker float-left d-inline"></i>
            <p class="d-inline px-1 m-0 py-0"> {!!$branch->address!!}</p>
          </div>
           @endforeach
        </div>
