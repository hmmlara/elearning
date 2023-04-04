@extends('layouts.main')

@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

        <div class="row">
            <div class="col-md-3 mb-3">
                <a href="{{route('batch.index')}}" class="btn btn-success">Back</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Batch</h5>
                    </div>
                    <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>
                                            Batch Name
                                        </th>
                                        <td>{{$batch->batch_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Course
                                        </th>
                                        <td>{{$batch->course->title}}</td>
                                    </tr>
                                    <tr>
                                        <th>Start Date</th>
                                        <td>{{$batch->start_date}}</td>
                                    </tr>
                                    <tr>
                                        <th>End Date</th>
                                        <td>{{$batch->end_date}}</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
            
        </div>

        {{-- <div class="row">
            <div class="col md-12">
                {{$courses->links('pagination::bootstrap-4')}}
            </div>
        </div> --}}
</main>

@endsection