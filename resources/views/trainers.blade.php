@extends('layouts.home')

@section('content')




<div class="row g-4 mt-5">
    @for ($i=0;$i<count($trainers);$i++)
    <div class="col-lg-3 col-md-3 wow fadeInUp" data-wow-delay="0.1s" >
        <div class="team-item bg-light">
            <div class="overflow-hidden">
                <img class="" src="img/{{$trainers[$i]['trainer_photo']}}" alt="" height="300px" width="400px">
            </div>

            <div class="text-center p-4">
                <h5 class="mb-0">{{$trainers[$i]['name']}} </h5>
                <small> {{$trainers[$i]['description']}}</small>
            </div>
        </div>
     </div>

     @endfor

</div>

@endsection
