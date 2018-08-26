@if (Session::has('success'))

   <div class="alert alert-success" style="width:auto; float:right; margin:2px 40px 0 0;" role="alert">
       <i class="fa fa-check"></i>
        <strong>Success:</strong> {{ Session::get('success')}}
   </div>

@endif

@if ($errors->any())
    <div class="alert alert-danger" style="width:auto; float:right; margin:2px 40px 0 0;" role="alert">

        <ul>
            @foreach ($errors->all() as $error)
            {{-- <i class="fa fa-close "></i> --}}
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif