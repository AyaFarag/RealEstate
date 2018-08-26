
      
      {{-- ------------------------------------------------------------------------------------------------- --}}
      <section class="slideshow w-100 d-inline-block m-0 p-0">
        <div class="row m-0 p-0">
          <div id="carousel" class="carousel slide w-100" data-ride="carousel" data-interval="5000"> 

            {{--  <ol class="carousel-indicators">
              @foreach($slider as $key => $sliders)
              <li data-target="#carousel" data-slide-to="{{ $loop->index }}" class="cyrcle {{ $loop->first ? 'active' : '' }}">
              </li>
              @endforeach
            </ol>  --}}
          
            <div class="carousel-inner">
                @foreach($slider as $slider)
              <div class="carousel-item {{ $loop->first ? ' active' : '' }}"> <img class="d-block img-fluid w-100" src="{{ asset('uploads/slider/'. $slider->img) }}">
                <div class="carousel-caption row align-items-center">
                  <h3 class="w-100 text-center text-uppercase">{!! strip_tags($slider->title)!!}</h3>
                  <div class="w-50 m-auto text-center slideText">{!! $slider->description !!}</div>
                </div>
              </div>
              @endforeach
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
        </div>
      </section>