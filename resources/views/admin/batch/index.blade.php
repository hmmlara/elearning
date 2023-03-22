@extends('layouts.main')

@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

        <div class="row">
            <div class="col-md-3 mb-3">
                <a href="#" class="btn btn-success">Add New Batch</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Batches</h5>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Batch Name</th>
                                <th class="d-none d-xl-table-cell">Course</th>
                                <th class="d-none d-xl-table-cell">Start Date</th>
                                <th class="d-none d-xl-table-cell">End Date</th>
                                <th class="d-none d-xl-table-cell">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($batches as $batch)
                                <tr>
                                    <td>{{$from++}}</td>
                                    <td>{{$batch->batch_name}}</td>
                                    <td class="d-none d-xl-table-cell">{{$batch->course->title}}</td>
                                <td class="d-none d-xl-table-cell">{{$batch->start_date}}</td>
                            
                                <td class="d-none d-md-table-cell">{{$batch->end_date}}</td>
                                <td class="d-none d-md-table-cell">
                                    <a href="" class="btn btn-success">View</a>
                                    <a href="" class="btn btn-warning">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                                
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>

        <div class="row">
            <div class="col md-12">
                {{$batches->links('pagination::bootstrap-4')}}
            </div>
        </div>

    </div>
</main>

@endsection