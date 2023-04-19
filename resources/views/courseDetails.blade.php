@extends('layouts.home')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">{{ $courses->title }}</h1>
                    {{-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Courses</li>
                        </ol>
                    </nav> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container">
        <div class="row">


            <div class="col-12 col-md-8">
                <h3 class="mb-5">Course Outline</h3>
{{--                <h5>CHAPTER 1</h5>--}}
            @foreach($courses->topics as $topic)
                <div class="course-section mb-4">
                    <h5>CHAPTER {{ $loop->iteration }}</h5>
                    <h5 class="mb-3 mt-3">{{ $topic->topics_name }}</h5>
                    @foreach($topic->topicLessons as $selectTopicLess)
                        <div class="row">
                            <div class="col-md-10">{{ $selectTopicLess->lesson_name }}</div>
                            <div class="col-md-2">{{ $selectTopicLess->duration }}</div>
                            <hr>
                        </div>
                    @endforeach
                </div>
            @endforeach
            </div>

            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            {{-- <div class="col-6 col-md-12 p-4">
                                <h5>Schedules</h3>
                                <hr class="d-none d-md-block">
                                @foreach ($courses->batches as $batch)
                                    {{ $batch }}
                                @endforeach
                            </div> --}}
                            {{-- <hr class="d-none d-md-block mx-auto"> --}}
                            <div class="col-12 p-4">
                                <h5>Trainers</h3>
                                <hr class="d-none d-md-block">
                                @foreach ($courses->trainers as $trainer)
                                    {{ $trainer->name }}
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection
