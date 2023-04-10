@extends('layouts.home')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Courses</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <h3>Course Outline</h3>
{{--                <h5>CHAPTER 1</h5>--}}
                <div class="course-section">
                        <div>
                            @foreach($courses->topics as $topic)
                                <h5>CHAPTER {{ $loop->iteration }}</h5>
                            <h5>{{ $topic->topics_name }}</h5>
                                @foreach($topic->topicLessons as $selectTopicLess)
                                <div class="row">
                                    <div class="col-md-10">{{ $selectTopicLess->lesson_name }}</div>
                                    <div class="col-md-2">{{ $selectTopicLess->duration }}</div>
                                    <hr>
                                </div>
                                @endforeach
                            @endforeach
                        </div>


                </div>
            </div>


        </div>
    </div>






@endsection
