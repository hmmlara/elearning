@extends('layouts.main')

@section('content')

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3"><strong>Course Edit</strong> Dashboard</h1>

		<div class="row">
            <div class="col-md-3 mb-3">
                <a href="{{route('courses.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>

        <div class="row">
			<div class="col-12 col-lg-12 col-xxl-12 d-flex">
				<div class="card flex-fill">
					<div class="card-header">

						<h5 class="card-title mb-0">Editing Courses</h5>
					</div>

					<div class="card-body">
                        <form action="{{route('courses.update',$course->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Title</label>
                                    <input type="text" name="title" id="" class="form-control" value="{{$course->title}}">
                                    @error('title')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Description</label>
                                    <input type="text" name="description" id="" class="form-control" value="{{$course->description}}">
                                    @error('description')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Category</label>
                                    <select name="category_id" id="" class="form-select">
                                        <option value="">Choose Course Category</option>
                                        @foreach ($categories as $category)
                                            @if($category->id==$course->category_id)
                                                <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                            @else
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Course Duration</label>
                                    <input type="text" name="duration" id="" class="form-control" value="{{$course->duration}}">
                                    @error('duration')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">OJT Duration</label>
                                    <input type="text" name="ojt_duration" id="" class="form-control"  value="{{$course->ojt_duration}}">
                                    @error('ojt_duration')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Total Topic</label>
                                    <input type="number" name="total_topics" id="" class="form-control"  value="{{$course->total_topics}}">
                                    @error('total_topics')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Hour</label>
                                    <input type="number" name="hours" id="" class="form-control" value="{{$course->hours}}">
                                    @error('hours')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Fee</label>
                                    <input type="number" name="fee" id="" class="form-control" value="{{$course->fee}}">
                                    @error('fee')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Discount</label>
                                    <input type="number" name="discount" id="" class="form-control"  value="{{$course->discount}}">
                                    @error('discount')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">Feature Image</label>
                                    <input type="file" name="feature_image" id="" class="form-control">
                                    <img src="/img/{{$course->feature_image}}" alt="" width="150px" height="150px">
                                    @error('feature_image')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label for="" class="form-label">Learning Outcomes</label>
                                    <textarea name="learning_outcome" id="" cols="30" rows="10" class="form-control" value="">{{$course->learning_outcome}}</textarea>
                                    @error('learning_outcome')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button class="btn btn-primary">Update</button>
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