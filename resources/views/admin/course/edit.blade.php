@extends('layouts.main')

@section('content')

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

       <div class="row mb-3">
        <div class="col-md-3"><a href="{{route('courses.index')}}" class="btn btn-success">Back</a></div>
       </div>

       

        <div class="row">
            <div class="col-12  d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Courses</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('courses.update',$course->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-4">
                                    <div>
                                        <label for="" class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control" id="" value="{{$course->title}}">
                                    </div>
                                    @error('title')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <label for="" class="form-label">Course Category</label>
                                        <select name="category_id" id="" class="form-select">
                                            <option value="">Choose your category</option>
                                            @foreach($categories as $category)
                                                @if($category->id==$course->category_id)
                                                <option value={{$category->id}} selected>{{$category->name}}</option>

                                                @else
                                                <option value={{$category->id}}>{{$category->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                       
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <label for="" class="form-label">Description</label>
                                        <input type="text" name="description" class="form-control" id="" value="{{$course->description}}">
                                    </div>
                                    @error('description')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div>
                                        <label for="" class="form-label">Duration</label>
                                        <input type="text" name="duration" class="form-control" id="" value="{{$course->duration}}">
                                    </div>
                                    @error('duration')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <label for="" class="form-label">OJT Duration</label>
                                        <input type="number" name="ojt_integer" class="form-control" id="" value="{{$course->ojt_integer}}">
                                        
                                       
                                    </div>
                                    @error('ojt_integer')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <label for="" class="form-label">Total Topics</label>
                                        <input type="text" name="total_topics" class="form-control" id="" value="{{$course->total_topics}}">
                                    </div>
                                    @error('total_topics')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div>
                                        <label for="" class="form-label">Hours</label>
                                        <input type="number" name="hours" class="form-control" id="" value="{{$course->hours}}">
                                    </div>
                                    @error('hours')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <label for="" class="form-label">Fee</label>
                                        <input type="number" name="fee" class="form-control" id="" value="{{$course->fee}}">
                                       
                                       
                                    </div>
                                    @error('fee')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <label for="" class="form-label">Discount</label>
                                        <input type="number" name="discount" class="form-control" id="" value="{{$course->discount}}">
                                    </div>
                                    @error('discount')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                                <div class="col-md-12">
                                    <div>
                                        <label for="" class="form-label">Learning Outcome</label>
                                        <textarea name="learning_outcome" id="" rows="10" class="form-control">{{$course->learning_outcome}}</textarea>
                                    </div>
                                    @error('learning_outcome')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                                <div class="col-md-12 my-3">
                                    <button class="btn btn-secondary">Update</button>
                                </div>
                               
                            </div>
                           
                        </form>
                    </div>
                    
                </div>
            </div>
           
        </div>
        {{-- <div class="row">
            <div class="col-md-12">
                {{$courses->links('pagination::bootstrap-5')}}
            </div>
        </div> --}}

    </div>
</main>
@endsection