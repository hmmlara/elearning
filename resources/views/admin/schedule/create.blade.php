@extends('layouts.main')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Analysis</strong>Dashboard</h1>

            <div class="row mb-3">
                <div class="col-md-3">
                    <a href="{{ route('schedules.index') }}" class="btn btn-success">Back</a>
                </div>
            </div>
        </div>

        <div class="card p-4">
            <div class="card-content">
                <form action="{{ route('schedules.store') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <select name="course_id" id=""
                            class="form-control @if ($errors->has('course_id')) border border-danger @endif">
                            <option value="" hidden selected>Choose Course</option>
                            @foreach ($batches as $batch)
                                <option value="{{ $batch->id }}">{{ $batch->course->title }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('course_id'))
                            <small class="text-danger">{{ $errors->first('course_id') }}</small>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="day" id=""
                            class="form-control @if ($errors->has('day')) border border-danger @endif"
                            placeholder="Enter Day" value="{{ old('day') }}">
                        @if ($errors->has('day'))
                            <small class="text-danger">{{ $errors->first('day') }}</small>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <input type="datetime-local" name="start_time" id="" placeholder="Enter Start Time" value="{{ old('start_time')}}"
                            class="form-control @if ($errors->has('start_time')) border border-danger @endif">

                        @if ($errors->has('start_time'))
                            <small class="text-danger">{{ $errors->first('start_time') }}</small>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <input type="datetime-local" name="end_time" id="" placeholder="Enter End Time" value="{{ old('end_time') }}"
                            class="form-control @if ($errors->has('end_time'))
                                border border-danger
                            @endif">
                        @if ($errors->has('end_time'))
                            <small class="text-danger">{{ $errors->first('end_time') }}</small>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-success w-100">Add</button>
                </form>
            </div>
        </div>
    </main>
@endsection
