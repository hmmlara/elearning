@extends('layouts.main')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>


        <div class="row mb-3">
            <div class="col-md-3">
                <a href="{{route('categories.create')}}" class="btn btn-success">Add New Category</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Category</h5>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Created date</th>
                                <th>Updated date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <form action="{{route('categories.destroy',$category->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <tr>
                                        <td>{{$from++}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->created_at}}</td>
                                        <td>{{$category->updated_at}}</td>
                                        <td class="d-none d-md-table-cell">
                                            <a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning">Edit</a>
                                            <button class="btn btn-danger" type="submit">Delete</button></td>
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

                {{$categories->links('pagination::bootstrap-5')}}
            </div>
        </div>

    </div>
</main>
    
@endsection