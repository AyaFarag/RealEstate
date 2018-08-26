<div class="col-md-7">
        <h1 class="text-left pb-2">About</h1>
        <p class="lead">{!! strip_tags($about->content)!!}</p>
      </div>

      <div class="col-md-5 text-right p-0">
          <img style="" class="img-fluid" src="{{ asset('uploads/about/'. $about->img) }}" alt="Card image cap" />
 
         </div>
