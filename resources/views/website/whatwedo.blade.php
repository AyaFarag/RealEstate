<div class="backimg w-100 d-inline-block" id="about">
        <section class="about w90">
          <div class="row align-items-center mx-0">
            <section class="services who-wr">
              <h1 class="text-center p-4">What We Do</h1>
              <div class="text-center opaque-overlay services-container mb-3">
                <div class="row m-0">

                  @foreach($whatwedo as $whatwedo)
                  <div class="p-2 col-md-3 align-items-center">
                    <div class="m-auto">
                      <div class="w-100 h-100">
                          <img style="width:100px; height:100px;" class="card-img-top" src="{{ asset('uploads/whatwedo/'. $whatwedo->img) }}" alt="Card image cap" />
                      </div>
                    </div>
                    <h3 class="my-2 font-weight-bold">{!!$whatwedo->title!!}</h3>
                    <p class="font-weight-normal">{!!$whatwedo->describtion!!}</p>
                  </div>
                  @endforeach

                  {{--  <div class="col-md-3 p-2" >
                    <div class="serv-icon m-auto">
                      <div class="w-100 h-100">
                        <div class="serv-img m-auto"></div>
                      </div>
                    </div>
                    <h3 class="my-2 font-weight-bold">Mobile Application</h3>
                    <p class="font-weight-normal">At Digital Bridge Development We specialize in developing apps on Android and iOS platforms.</p>
                  </div>
                  <div class="col-md-3 p-2">
                    <div class="serv-icon m-auto">
                      <div class="w-100 h-100">
                        <div class="serv-img m-auto"></div>
                      </div>
                    </div>
                    <h3 class="my-2 font-weight-bold">Design</h3>
                    <p class="font-weight-normal">Once the Project Planning is done and get the client approval. Digital Bridge experience team members analyze the project design according to market research. once we get the best design and according to client requirement and start the project design.</p>
                  </div>
                  <div class="col-md-3 p-2">
                    <div class="serv-icon m-auto">
                      <div class="w-100 h-100">
                        <div class="serv-img m-auto"></div>
                      </div>
                    </div>
                    <h3 class="my-2 font-weight-bold">Analysis</h3>
                    <p class="font-weight-normal">During our analysis of web development companies we spend time analyzing how an agency tracks the status of their project.</p>
                  </div>  --}}
                </div>
              </div>
            </section>