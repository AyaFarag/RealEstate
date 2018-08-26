<div class="backimg w-100 d-inline-block" id="work">
        <section class="work w90">
          <div class="row align-items-center mx-0">
            <h1 class="text-center p-4 w-100">Our Work</h1>
            <div class="clearfix w-100">
              <ul class="nav justify-content-center po-links pb-4">
                <li class="nav-item mx-1 po-links-active" id="all"> <a href="" class="nav-link active">All</a> </li>
                <li class="nav-item mx-1" id="Mobile"> <a href="" class="nav-link">Mobile application</a> </li>
                <li class="nav-item mx-1" id="website"> <a href="" class="nav-link">Website</a> </li>
                <li class="nav-item mx-1" id="Design"> <a href="" class="nav-link">Design</a> </li>
              </ul>
            </div>



            <div class="w-100 text-center opaque-overlay mb-3">
              <div class="row m-0" id="po-wrap">
                
                @foreach($ourworks as $ourwork)
                <div class="col-md-4 align-items-center all {{$ourwork->fields->name}} mt-2" >
                  <div class="po-block"> <img class="img-fluid" src="{{ asset('uploads/ourworks/'. $ourwork->img) }}"/> </div>
                </div>
                @endforeach
                


              </div>
            </div>



          </div>
        </section>
      </div>