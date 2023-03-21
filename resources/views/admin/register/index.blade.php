@extends('layouts.main')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

      <div class="row">
        <div class="col-md-3">
            <a href="#" class="btn btn-success">Add New Register</a>
        </div>
      </div>

        <div class="row">
            <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                       
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>User Name</th>
                                <th class="d-none d-xl-table-cell">Batch Name</th>
                                <th>Actions</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($registers as $register)
                            <tr>
                                <th>{{$from++}}</th>
                                <th>{{$register->user->name}}</th>
                                <th>{{$register->batch->batch_name}}</th>
                                
                                <th><a href="" class="btn btn-success me-2">View</a><a href="" class="btn btn-warning me-2">Edit</a><a href="" class="btn btn-danger">Delete</a></th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                   
                </div>
            </div>
          <div class="row">
            <div class="col-md-12">
                {{$registers->links('pagination::bootstrap-5')}}
               
            </div>
          </div>
        </div>
        

    </div>
</main>
   
@endsection