@extends('layouts.main')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>


        <div class="row mb-3">
            <div class="col-md-3">
                <a href="{{route('courses.create')}}" class="btn btn-success">Add New Course</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Courses</h5>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th class="d-none d-xl-table-cell">Category</th>
                                <th class="d-none d-xl-table-cell">Duration</th>
                                <th>Hours</th>
                                <th class="d-none d-md-table-cell">Lessons</th>
                                <th class="d-none d-md-table-cell">Fee</th>
                                <th class="d-none d-md-table-cell">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- <tr>
                                <td>Project Apollo</td>
                                <td class="d-none d-xl-table-cell">01/01/2021</td>
                                <td class="d-none d-xl-table-cell">31/06/2021</td>
                                <td><span class="badge bg-success">Done</span></td>
                                <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                            </tr> --}}
                            @foreach ($courses as $course)
                                <tr>
                                    <td>{{$from++}}</td>
                                    <td>{{$course->title}}</td>
                                    <td>{{$course->category->name}}</td>
                                    <td>{{$course->duration}}</td>
                                    <td>{{$course->hours}}</td>
                                    <td>{{$course->total_topics}}</td>
                                    <td>{{$course->fee}}</td>
                                    <th class="d-none d-md-table-cell"><a href="" class="btn btn-success">View</a><a href="{{route('courses.edit',$course->id)}}" class="btn btn-warning">Edit</a><a href="" class="btn btn-danger">Delete</a></th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                {{ $courses->links('pagination::bootstrap-5')}}
            </div>
        </div>

    </div>
</main>
    
@endsection