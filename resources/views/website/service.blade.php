<div class="backimg w-100 d-inline-block" id="services">
        <section class="services">
          <h1 class="text-center pt-4">Our Services</h1>
          <div class="py-0 text-center opaque-overlay services-container">
            <div class="w90">
              <div class="row m-0">
                @foreach($service as $service)
                <div class="col-md-3 p-2">
                  <div class="service p-3">
                    <div class=" m-auto">
                      <div class="w-50 h-50 m-auto">
                        <div class=" m-auto">
                            <img style="" class="card-img-top" src="{{ asset('uploads/service/'. $service->img) }}" alt="Card image cap" />
                        </div>
                      </div>
                    </div>
                    <h3 class="my-2 font-weight-bold">{!!$service->title!!}</h3>
                    <p>{!!$service->describtion!!} </p>
                  </div>
                </div>
                @endforeach

                
              </div>
            </div>
          </div>
        </section>
      </div>