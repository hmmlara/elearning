@extends('layouts.main')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Analysis</strong>Dashboard</h1>

            <div class="row mb-3">
                <div class="col-md-3">
                    <a href="http://" class="btn btn-success">Add New Course</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                    <div class="card flex-fill">
                        {{-- <div class="card-header">

                            <h5 class="card-title mb-0">Latest Projects</h5>
                        </div> --}}
                        <table class="table table-hover my-0 text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th class="d-none d-xl-table-cell">Category</th>
                                    <th class="d-none d-xl-table-cell">Duration</th>
                                    <th>Hours</th>
                                    <th class="d-none d-md-table-cell">Lessons</th>
                                    <th class="d-none d-md-table-cell">Fee</th>
                                    <th class="d-none d-md-table-cell">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $key => $course)
                                <tr>
                                    <td>{{ $courses->firstItem() + $key }}</td>
                                    <td>{{ $course->title }}</td>
                                    <td class="d-none d-xl-table-cell">{{ $course->category->name }}</td>
                                    <td class="d-none d-xl-table-cell">{{ $course->duration }}</td>
                                    <td><span class="badge bg-success">{{ $course->hours }} hrs</span></td>
                                    <td><span class="badge bg-success">{{ $course->total_topics }}</span></td>
                                    <td class="d-none d-xl-table-cell">{{ $course->fee }}</td>
                                    <td class="d-none d-xl-table-cell">
                                        <a href="http://" class="btn btn-success">View</a>
                                        <a href="http://" class="btn btn-warning">Edit</a>
                                        <a href="http://" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="d-flex mt-3 justify-content-around">
                            <div class="mt-2">
                                Showing {{ $courses->firstItem() }} to {{ $courses->lastItem() }} of total {{ $courses->total() }}
                            </div>
                            <div class="pagination ">
                                {{ $courses->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
