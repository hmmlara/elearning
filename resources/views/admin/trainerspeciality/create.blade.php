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
                    <div class="card-body">
                        <form action="{{route('trainer_speciality.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                               
                                <div class="col-md-6">
                                    <div>
                                        <label for="" class="form-label"></label>
                                        <select name="trainer_id" id="" class="form-select">
                                            <option value="">Choose your Trainer</option>
                                            @foreach($trainers as $trainer)
                                                <option value={{$trainer->id}}>{{$trainer->name}}</option>
                                            @endforeach
                                        </select>
                                       
                                    </div>
                                </div>
            
                                <div class="col-md-6">
                                    @foreach($specialities as $speciality)
                                    <div class="form-check">
                                        <input class="form-check-input" name="speciality_id[]" type="checkbox" value="{{$speciality->id}}" id="flexCheckDisabled" >
                                        <label class="form-check-label" for="flexCheckDisabled">
                                            {{$speciality->name}}
                                        </label>
                                    </div>
                                    @endforeach

                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-warning">Add</button>

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