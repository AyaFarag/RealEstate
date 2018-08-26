<!DOCTYPE html>
<html class="h-100">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="/css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="/css/main.css" type="text/css">
<link rel="stylesheet" type="text/css" href="/css/slick.css"/>
<link rel="stylesheet" type="text/css" href="/css/slick-theme.css"/>
<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="/js/slick.min.js"></script>
<script type="text/javascript" src="/app.js"></script>
<title>Digital Bridge Company</title>
</head>

<body class="courses">

<!-- Header Section !-->
<header class="header align-items-center m-0 p-0 position-absolute w-100" id="header">
  <div class="w90">
    <nav class="navbar navbar-expand-md navbar-light"> <a class="navbar-brand logo" href="#"><img class="logo-default" src="/images/logo-foo.png"/><img class="logo-active" src="/images/logo-active.png"/></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item"> <a class="nav-link" href="{{url('/')}}">Home</a> </li>
          <li class="nav-item"> <a class="nav-link" href="{{url('/')}}#about">About</a> </li>
          <li class="nav-item"> <a class="nav-link" href="{{url('/')}}#work">Work</a> </li>
          <li class="nav-item"> <a class="nav-link" href="{{url('/')}}#services">Services</a> </li>
          <li class="nav-item"> <a class="nav-link" href="{{url('/all/courses')}}">Courses</a> </li>
          <li class="nav-item"> <a class="nav-link" href="{{url('/')}}#news">Team</a> </li>
          <li class="nav-item"> <a class="nav-link" href="{{url('/')}}#contact">Contact us</a></li>
        </ul>
      </div>
    </nav>
  </div>
</header>
<div class="clearfix"></div>

<!-- Slidehow Section !-->
<section class="slideshow courses w-100 d-inline-block m-0 p-0">

  <div class="row m-0 p-0">
    <div id="carousel" class="carousel slide w-100">
      <div class="carousel-inner">
        <div class="carousel-item active"> 
          <img style="" class="d-block img-fluid w-100" src="{{ asset('uploads/slider/'. $courseslider->img) }}" alt="Card image cap" />
          <div class="carousel-caption row align-items-center">
            <h3 class="w-100 text-center text-uppercase bold h3">{{ strip_tags($courseslider->title) }}</h3>
            <div class="w-50 my-0 mx-auto text-center text-capitalize">{!! $courseslider->description !!}</div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<div class="clearfix"></div>



<!-- Work Section !-->
<div class="backimg w-100 d-inline-block" id="work">
  <section class="work w90">
      @foreach($courseTypes as $k => $type)    
    <div class="row align-items-center mx-0">
      <div class="text-center p-4 w-100" id="course-{{ $k }}">{!! $type->name !!}</div>  
      <div class="w-100 text-center opaque-overlay mb-3">
        <div class="row m-0 ">
            @foreach ($type->courses as $key => $course)
          <div class="col-md-3 align-items-center mobile show-all mt-2 course-{{ $k }}">
            <div class="po-block"> <a href="#" data-toggle="modal" data-target="#1">
              <div class="details-block position-absolute">
                <div class="details text-center position-absolute"> <img src="/images/zoom.png"/>
                  <h3 class="title text-center">BlockcHain Adapt</h3>
                </div>
              </div>
              <img class="h-100" src="{{ asset('uploads/courses/'. $course->image) }}"/> </a>
              <div class="modal " id="1" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content p-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body p-0"> <img src="{{ asset('uploads/courses/'. $course->image) }}" class="w-100"> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    @endforeach      
  </section>
</div>
<div class="clearfix"></div>


{{--  @foreach($coursetype['courses'] as $k => $v)
{{ $k }} 
@foreach ($courses as $key => $value) 
    {{ $key . ' => ' . $value }}
@endforeach  --}}

<!-- Contact Section !-->
<div class="backimg w-100 d-inline-block" id="contact">
  <section class="contact">
    <div class="pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center text-capitalize">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="w90">
          <!-- Branches -->
          @include('website.branches')

          
          <!-- subscribers -->
          @include('website.subscribers')
        </div>
        </section>
        </div>
      
      
      
    

<div class="clearfix"></div>
<script type="text/javascript" src="/js/function.js"></script>
</body>
</html>