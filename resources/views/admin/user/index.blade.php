@extends('layouts.main')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Analytics</strong>Dashboard</h1>

    

        <div class="row">
            <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Users</h5>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th> Name</th>
                                <th class="d-none d-xl-table-cell">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <th>{{$from++}}</th>
                                <th>{{$user->name}}</th>
                                <th>{{$user->email}}</th>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                   
                </div>
            </div>
          <div class="row">
            <div class="col-md-12">
                {{$users->links('pagination::bootstrap-5')}}
               
            </div>
          </div>
        </div>
        

    </div>
</main>
   
@endsection