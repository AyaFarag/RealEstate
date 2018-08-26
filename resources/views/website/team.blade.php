<div class="backimg w-100 d-inline-block" id="news">
        <section class="news w90">
          <h1 class="text-center p-4">Our team</h1>
          <div class="row m-0 align-items-center">
            <div class="your-class w-100">
              @foreach($team as $member)
              <div>
                <div class="slick-container"> 
                    <img style="" class="w-100" src="{{ asset('uploads/team/'. $member->img) }}" alt="Card image cap" />
                  {{-- <img class="w-100" src="images/layer-10.jpg"/> --}}
                  <div class="slick-content position-relative w-100">
                    <div class="slick-title">
                      <h4 class="font-weight-bold">{!!$member->name!!}</h4>
                      <p class="font-weight-normal">{!!$member->jobTitle!!}</p>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </section>
      </div>