@extends('layouts.main')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>


        <div class="row mb-3">
            <div class="col-md-3">
                <a href="{{route('courses.index')}}" class="btn btn-success">Back</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Courses</h5>
                    </div>
                    <div class="card-body">
                        <form action=""></form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                {{$categories->links('pagination::bootstrap-5')}}
            </div>
        </div>

    </div>
</main>
    
@endsection