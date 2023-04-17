@extends('layouts.main')

@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

       <div class="row mb-3">
        <div class="col-md-3"><a href="{{route('trainer_speciality.index')}}" class="btn btn-success">Back</a></div>
       </div>

       

        <div class="row">
            <div class="col-12  d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">TrainerSpeciality</h5>
                    </div>
                    {{-- {{route('trainer_speciality.update')}} --}}
                    <div class="card-body">
                        <form action="{{route('trainer_speciality.update',$trainer_name->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                               
                               
                                <div class="col-md-6">
                                <h3>{{$trainer_name->name}}</h3>

                                </div>
        

                                <div class="col-md-6">
                                    <label for="" class="form-label">Speciality</label>


                                    {{-- {{count($used_speciality)}}<br><h1>hee</h1>{{count($allspeciality)}} --}}

                                    {{-- @foreach($allspeciality as $speciality)
                                    <div class="form-check">
                                        @for($index=0;$index<count($used_speciality);$index++)
                                            @if($speciality->id==$used_speciality[$index]->speciality_id)
                                        
                                                <input class="form-check-input" checked name="speciality_id[]" type="checkbox" value="" id="flexCheckDisabled" >
                                                <label class="form-check-label" for="flexCheckDisabled">
                                                    {{$speciality->name}}
                                                </label>
                                            @else
                                                <input class="form-check-input" checked name="speciality_id[]" type="checkbox" value="" id="flexCheckDisabled" >
                                                <label class="form-check-label" for="flexCheckDisabled">
                                                     {{$speciality->name}}
                                                </label>
                                            @endif
                                        @endfor
                                
                                    </div>
                                    @endforeach --}}
                                    @foreach($allspeciality as $speciality)
                                        <div class="form-check">
                                            @php
                                            $isChecked = false;
                                            foreach($used_speciality as $used) {
                                                if ($speciality->id == $used->speciality_id) {
                                                    $isChecked = true;
                                                    break;
                                                }
                                            }
                                            @endphp
                                            <input class="form-check-input" {{$isChecked ? 'checked' : ''}} name="speciality_id[]" type="checkbox" value="{{$speciality->id}}" id="speciality_{{$speciality->id}}">
                                            <label class="form-check-label" for="speciality_{{$speciality->id}}">{{$speciality->name}}</label>
                                        </div>
                                    @endforeach

                                   
                                </div>
                                
                                
                                
                                <div class="col-md-3">

                                    <button class="btn btn-warning" >Update</button>

                                </div>
                                
                               
                            </div>
                            
                        </form>
                    </div>
                    
                </div>
            </div>
           
        </div>
        {{-- <div class="row">
            <div class="col-md-12">
                {{$courses->links('pagination::bootstrap-5')}}
            </div>
        </div> --}}

    </div>
</main>
@endsection