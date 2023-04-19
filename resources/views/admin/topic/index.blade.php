@extends('layouts.main')

@section('content')

    <main class="content">


        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Topics</h2>

                    <a href="{{ route('topics.create') }}" class="btn btn-primary float-end">Add Topic</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Course Name</th>
                                <th>Topic Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($topics as $topic)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $topic->course->title }}</td>
                                    <td>{{ $topic->topic_name }}</td>
                                    <td>{{ $topic->description }}</td>
                                    <td>
                                        <button class="btn btn-warning">Edit</button>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>


                    </table>
                </div>

            </div>

        </div>

{{--        <script>--}}
{{--            let topic = [];--}}
{{--        </script>--}}
{{--        @foreach ($courses as $course)--}}
{{--            <script>--}}
{{--                topic.push({{ $course->toJson() }});--}}
{{--            </script>--}}
{{--        @endforeach--}}

    </main>

{{--    <td><select name="" id=""><option value="0">Choose Course</option>';--}}
{{--            items.forEach(function (item)--}}
{{--            {--}}
{{--            output += "<option class='top' value="+item.id+">"+item.title+"</option>"--}}
{{--            console.log($(".top").val());--}}
{{--            });--}}
{{--            output += `</select></td>--}}


@endsection
