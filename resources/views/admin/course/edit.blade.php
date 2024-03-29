@extends('layouts.main')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>


        <div class="row mb-3">
            <div class="col-md-3">
                <a href="{{route('courses.index')}}" class="btn btn-success">Back</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Courses</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('courses.update',$course->id)}}" method="post" >
                            @csrf
                            @method('put')
                            <div class="row my-3">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Title</label>
                                    <input type="text" name="title" id="" class="form-control" value="{{$course->title}}">
                                    @error('title')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Category</label>
                                    <select name="category_id" id="" class="form-select">
                                        <option value="">Choose course category</option>
                                        @foreach($categories as $category)
                                            @if($category->id==$course->category_id)
                                            <option value="{{$category->id}}" selected>{{ $category->name }}</option>
                                                                                           
                                            @else
                                            <option value="{{$category->id}}">{{ $category->name }}</option> 
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Description</label>
                                    <input type="text" name="description" id="" class="form-control" value="{{ $course->description}}">
                                    @error('description')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                                
                            </div>
                            <div class="row my-3">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Duration</label>
                                    <input type="text" name="duration" id="" class="form-control" value="{{ $course->duration}}">
                                    @error('duration')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">OJT Duration</label>
                                    <input type="text" name="ojt_duration" id="" class="form-control" value="{{$course->ojt_duration}}">
                                    @error('ojt_duration')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Total Topics</label>
                                    <input type="number" name="total_topics" id="" class="form-control" value="{{$course->total_topics}}">
                                    @error('total_topics')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                                
                            </div>
                            <div class="row my-3">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Hours</label>
                                    <input type="number" name="hours" id="" class="form-control" value="{{$course->hours}}">
                                    @error('hours')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Fee</label>
                                    <input type="number" name="fee" id="" class="form-control" value="{{$course->fee}}">
                                    @error('fee')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Discount</label>
                                    <input type="number" name="discount" id="" class="form-control" value="{{$course->discount}}">
                                    @error('discount')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                                
                            </div>
                            <div class="row my-3">
                                <div class="col-md-12">
                                    <label for="" class="form-label">Learning Outcome</label>
                                    <textarea name="learing_outcome" id="" cols="30" rows="10" class="form-control" >{{$course->learing_outcome}}</textarea>
                                    @error('learing_outcome')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-12">
                                    <button class='btn btn-success'> Update </button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
       

    </div>
</main>
    
@endsection