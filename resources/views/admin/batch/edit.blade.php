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
                        <form action="{{route('batch.update', $batch->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="row my-3">
                                <div class="col-md-3">                                    
                                    <label for="" class="form-label">Batch Name</label>
                                    <input type="text" name="batch_name" id="" class="form-control" value="{{$batch->batch_name}}">
                                    @error('batch_name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">Course</label>
                                    <select name="course_id" id="" class="form-select">
                                        <option value="" >Choose Course</option>
                                        @foreach ($courses as $course)
                                            @if ($course->id == $batch->course_id)
                                            <option value="{{$course->id}}" selected>{{$course->title}}</option>
                                                
                                            @else
                                            <option value="{{$course->id}}">{{$course->title}}</option>
                                                
                                            
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">Start Date</label>
                                    <input type="date" name="start_date" id="" class="form-control" value="{{$batch->start_date}}">
                                    @error('start_date')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                
                                
                                    <div class="col-md-3">
                                        <label for="" class="form-label">End Date</label>
                                        <input type="date" name="end_date" id="" class="form-control" value="{{$batch->end_date}}">
                                        @error('end_date')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    </div>
                                </div>
                                
                                    <div class="row my-3">
                                        <div class="col-md-12">
                                            <button class="btn btn-success">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
            
        

        {{-- <div class="row">
            <div class="col md-12">
                {{$courses->links('pagination::bootstrap-3')}}
            </div>
        </div> --}}
</main>

@endsection