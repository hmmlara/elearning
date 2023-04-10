@extends('layouts.main')

@section('content')
    <main class="content">

        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

            <div class="row">
                <div class="col-md-3">
                    <a href="{{ route('topicLesson.create') }}" class="btn btn-success">Add Topic Lesson</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Topic Lesson</h5>
                        </div>
                        <table class="table table-hover my-0">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Topic Name</th>
                                <th class="d-none d-xl-table-cell">Lesson Name</th>
                                <th class="d-none d-xl-table-cell">Duration</th>
                                <th class="d-none d-md-table-cell">Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($topicLessons as $topicLesson)
                                <form action="{{ route('topicLesson.destroy', $topicLesson->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <tr>
                                        <td>{{ $from++ }}</td>
                                        {{-- //topic==model ထဲက function name --}}
                                        <td>{{ $topicLesson->topic->topic_name }}</td>
                                        <td class="d-none d-xl-table-cell">{{ $topicLesson->lesson_name }}</td>
                                        <td class="d-none d-xl-table-cell">{{ $topicLesson->duration }}</td>
                                        <td class="d-none d-md-table-cell">
                                            <a href="{{ route('topicLesson.show', $topicLesson->id) }}" class="btn btn-success">View</a>
                                            <a href="{{ route('topicLesson.edit', $topicLesson->id) }}"
                                               class="btn btn-warning">Edit</a>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                            {{-- <a href="{{ route('topicLesson.destroy',$topicLesson->id) }}" class="btn btn-danger">Delete</a> --}}
                                        </td>
                                    </tr>
                                </form>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{-- //pagination က $topicLessons ဆိုတာက model တခုလုံးကိုေပျာ --}}
                    {{ $topicLessons->links('pagination::bootstrap-5') }}
                </div>
            </div>

        </div>
    </main>
@endsection
