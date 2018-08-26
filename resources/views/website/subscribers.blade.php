<div class="col-md-4 p-0">
    <div class="form-group text-left p-0">
      <form action="{{route('subscribers.store')}}" method="POST" >
          {{ csrf_field() }}
      <label class="text-left font-weight-bold">For Subscribtion</label>
      <input type="email" class="form-control p-3 contact-input" id="InputEmail1" placeholder="Enter E-mail.." name="subscriber">
      <button class="btn btn-sm subs-btn">Send</button>
      @include('admin.message')
    </div>
  </div>

    </div>
  </div>
</section>
</div>