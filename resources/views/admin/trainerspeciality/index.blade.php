@extends('layouts.main')

@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

       <div class="row mb-3">
        <div class="col-md-3"><a href="{{route('trainer_speciality.create')}}" class="btn btn-success">Add new TrainerSpeciality</a></div>
       </div>

       

        <div class="row">
            <div class="col-12  d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">TrainerSpeciality</h5>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th class="d-none d-xl-table-cell">Trainer Name</th>
                                <th class="d-none d-xl-table-cell">Speciality Name</th>
                              
                                <th class="d-none d-xl-table-cell">Actions</th>


                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($trainers as $trainer)
                    <form action="{{route('trainer_speciality.destroy',$trainer->id)}}" method="post">
                        @csrf
                        @method('delete')

                        @if(count($trainer->specialities)!=0)
                            <tr>
                                <td>{{$from++}}</td>
    
                                <td>{{$trainer->name}}</td>
                                <td>
                                    @foreach($trainer->specialities as $speciality)
                                        
                                        <span>{{$speciality->name}}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{route('trainer_speciality.show',$trainer->id)}}" class="btn btn-primary">View</a>
                                    <a href="{{route('trainer_speciality.edit',$trainer->id)}}" class="btn btn-warning">Edit</a>
                                    <button class="btn btn-outline-danger">Delete</button>
                                </td>
                               
                               
                            </tr>  
                        
                        @endif
                         
                    </form>
                    @endforeach


                           
                           
                        </tbody>
                    </table>
                </div>
            </div>
           
        </div>
        <div class="row">
            <div class="col-md-12">
                {{$trainers->links('pagination::bootstrap-5')}}
            </div>
        </div>

    </div>
</main>
@endsection