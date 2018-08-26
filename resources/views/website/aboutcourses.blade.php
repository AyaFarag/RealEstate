<div class="col-12 pt-5">
	  <h1 class="text-center pb-2 ">We offer some courses</h1></div>
	   <div class="col-md-5 text-left p-0"> 
       <a href="{{ url('/all/courses')}}"> <img class="img-fluid" src="{{ asset('uploads/aboutcourses/'. $aboutcourses->img) }}"/> </a>
      </div>
	   <div class="col-md-7">
        <span class="text-center pb-2 font-weight-normal h1">{!! $aboutcourses->title !!}</span>
        <div class="lead">{!!$aboutcourses->content!!}</div>
      </div>
     
    </div>
  </section>
</div>
