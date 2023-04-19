@extends('layouts.main')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Analysis</strong>Dashboard</h1>

            <div class="row mb-3">
                <div class="col-md-3">
                    <a href="{{ route('schedules.create') }}" class="btn btn-success">Add New Schedule</a>
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
                                    <th class="d-none d-xl-table-cell">Course</th>
                                    <th class="d-none d-xl-table-cell">Day</th>
                                    <th class="d-none d-md-table-cell">Start Time</th>
                                    <th class="d-none d-md-table-cell">End Time</th>
                                    <th class="d-none d-md-table-cell">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($schedules as $key => $schedule)
                                <tr>
                                    <td>{{ $schedules->firstItem() + $key }}</td>
                                    <td>{{ $schedule->batch->course->title }}</td>
                                    <td>{{ $schedule->day }}</td>
                                    <td>{{ $schedule->start_time }}</td>
                                    <td>{{ $schedule->end_time }}</td>
                                    <td class="d-none d-xl-table-cell">
                                        <a href="http://" class="btn btn-success">View</a>
                                        <a href="{{ route('schedules.edit', $schedule->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="http://" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                                {{ $schedules->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
