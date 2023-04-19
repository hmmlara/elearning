@extends('layouts.main')

@section('content')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <main class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="mt-3">Create Topic</h3>

                    <a href="{{ route('topics.index') }}" class="btn btn-dark float-end">Back</a>
                    <form action="{{ route('topics.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select name="course_id" id="" class="form-control">
                                        <option value="0">Choose Course</option>
                                        @foreach($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-success float-end mb-3">Save</button>
                            </div>
                        </div>

                        <table class="table table-bordered" id="dynamicTable">
                            <tr>
                                <th class="d-none d-xl-table-cell">Topic Name</th>
                                <th class="d-none d-xl-table-cell">description</th>
                                <th class="d-none d-xl-table-cell">Action</th>
                            </tr>
                            <tr>
                                <td><input type="text" name="topic_name[]" placeholder="Enter Topic" class="form-control" /></td>
                                <td><input type="text" name="description[]" placeholder="Enter description" class="form-control" /></td>
                                <td><button type="button" class="btn btn-danger remove-tr">Remove</button></td>
                            </tr>
                        </table>

                        <div class="d-flex justify-content-center">
                            <button type="button" name="add" id="add" class="btn btn-info mt-1">+</button>
                        </div>


                    </form>
                </div>

            </div>
        </div>
    </main>

    <script type="text/javascript">

        var i = 0;

        {{--let items = {!! $items !!};--}}
        {{--            var items = JSON.parse('{{ $items }}');--}}


        $("#add").click(function(){

            ++i;
            let output =  `<tr>
                    <td><input type="text" name="topic_name[]" placeholder="Enter Topic" class="form-control" /></td>
                    <td><input type="text" name="description[]" placeholder="Enter description" class="form-control" /></td>
                    <td><button type="button" class="btn btn-danger remove-tr">Remove</button></td>
                    </tr>`;
            $("#dynamicTable").append(output);
        });

        $(document).on('click', '.remove-tr', function(){
            $(this).parents('tr').remove();
        });

    </script>
@endsection
