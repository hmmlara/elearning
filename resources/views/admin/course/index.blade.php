@extends('layouts.main')

@section('content')
<main>
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Analytics</strong>Dashboard</h1>

      <div class="row">
        <div class="col-md-3">
            <a href="#" class="btn btn-success">Add New Course</a>
        </div>
      </div>

        <div class="row">
            <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Courses</h5>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Course Name</th>
                                <th class="d-none d-xl-table-cell">Category</th>
                                <th class="d-none d-xl-table-cell">Duration</th>
                                <th>Hours</th>
                                <th class="d-none d-md-table-cell">Lessons</th>
                                <th class="d-none d-md-table-cell">Fees</th>
                                <th class="d-none d-md-table-cell">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                            <tr>
                                <th>{{$from++}}</th>
                                <th>{{$course->title}}</th>
                                <th>{{$course->category->name}}</th>
                                <th >{{$course->ojt_duration}}</th>
                                <th class="">{{$course->hours}}</th>
                                <th>{{$course->total_topics}}</th>
                                <th>{{$course->fee}}</th>
                                <th><a href="" class="btn btn-success me-2">View</a><a href="" class="btn btn-warning me-2">Edit</a><a href="" class="btn btn-danger">Delete</a></th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                   
                </div>
            </div>
          <div class="row">
            <div class="col-md-12">
                {{$courses->links('pagination::bootstrap-5')}}
               
            </div>
          </div>
        </div>
        

    </div>
</main>
   
@endsection