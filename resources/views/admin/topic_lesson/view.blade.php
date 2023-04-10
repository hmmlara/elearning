@extends('layouts.main')

@section('content')
    <main class="content">

        <div class="container-fluid p-0">

            <h3>Topic_Lessons Information</h3>
            <div class="row">
                <div class="col-md-3">
                    <a href="{{ route('topicLesson.index') }}" class="btn btn-success">Back</a>
                </div>

            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-4 border border-dark m-auto">

                        <div>Topic Name::
                            @foreach ($topic as $topics)
                                @if ($topics->id == $topiclesson->topic_id)
                                    {{ $topics->topic_name }}
                                @endif
                            @endforeach</div>
                        <div>Lesson Name::{{ $topiclesson->lesson_name }}</div>
                        <div>Duration::{{ $topiclesson->duration }}</div>

                    </div>

                </div>
            </div>

        </div>
    </main>
@endsection
