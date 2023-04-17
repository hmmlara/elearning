@extends('layouts.main')

@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

       <div class="row mb-3">
        <div class="col-md-3"><a href="{{route('trainer_speciality.index')}}" class="btn btn-success">Back</a></div>
       </div>

       

        <div class="row">
            <div class="col-6  d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">TrainerSpeciality</h5>
                    </div>
                    <table class="table table-hover my-0">
                        <tbody>
                       
                        <tr>

                            <td>{{$trainer->name}}</td>
                            <td>
                                @foreach($trainer->specialities as $speciality)
                                    
                                    <span><li>{{$speciality->name}}</li></span>
                                @endforeach
                            </td>
                           
                           
                           
                        </tr>   

                           
                           
                        </tbody>
                    </table>
                </div>
            </div>
           
        </div>
       

    </div>
</main>
@endsection