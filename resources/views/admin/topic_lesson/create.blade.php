@extends('layouts.main')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

            <div class="row">
                <div class="col-md-3">
                    <a href="{{ route('topicLesson.index') }}" class="btn btn-success">Back</a>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">

                                <h5 class="card-title mb-0">Lessons</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('topicLesson.store') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div>
                                                <label for="" class="form-label">Topic Name</label>
                                                <select name="topic_id" id="" class="form-select">
                                                    <option value="">Choose Topic</option>
                                                    @foreach ($topics as $topic)
                                                        <option value="{{ $topic->id }}">{{ $topic->topic_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div>
                                                <label for="" class="form-label">Lesson Name</label>
                                                <input type="text" name="lesson_name" id=""
                                                       class="form-control">
                                                @error('lesson_name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div>
                                                <label for="" class="form-label">Duration</label>
                                                <input type="text" name="duration" id="" class="form-control">
                                                @error('duration')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-success">Add</button>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
