@extends('layouts.main')

@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

        <div class="row">
            <div class="col-md-3 mb-3">
                <a href="{{route('courses.create')}}" class="btn btn-success">Add New Course</a>
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
                                <th>Name</th>
                                <th class="d-none d-xl-table-cell">Image</th>
                                <th class="d-none d-xl-table-cell">Category</th>
                                <th class="d-none d-xl-table-cell">Duration</th>
                                <th>Hours</th>
                                <th class="d-none d-md-table-cell">Total Topics</th>
                                <th class="d-none d-md-table-cell">Fee</th>
                                <th class="d-none d-md-table-cell">Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $key => $course)
                            <form action="{{route('courses.destroy', $course->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <tr>
                                    <td>{{$courses->firstItem() + $key}}</td>
                                    <td>{{$course->title}}</td>
                                    <td><img src="storage/app/public/image/{{$course->feature_img}}" alt=""></td>
                                    <td class="d-none d-xl-table-cell">{{$course->category->name}}</td>
                                <td class="d-none d-xl-table-cell">{{$course->duration}}</td>
                                <td><span class="badge bg-success">{{$course->hours}}</span></td>
                                <td class="d-none d-md-table-cell">{{$course->total_topics}}</td>
                                <td class="d-none d-md-table-cell">{{$course->fee}}</td>
                                <td class="d-none d-md-table-cell">
                                    <a href="{{route('courses.show', $course->id)}}" class="btn btn-success">View</a>
                                    <a href="{{route('courses.edit', $course->id)}}" class="btn btn-warning">Edit</a>
                                    <button class="btn btn-danger">Delete</button>
                                </td>

                                </tr>
                            </form>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <div class="d-flex justify-content-around">
            <div>
                Showing {{ $courses->firstItem() }} to {{ $courses->lastItem() }}
                of total {{ $courses->total() }}
            </div>
            <div class="pagination">
                {{$courses->links('pagination::bootstrap-4')}}
            </div>
        </div>

    </div>
</main>

@endsection
