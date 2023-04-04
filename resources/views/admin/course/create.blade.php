@extends('layouts.main')

@section('content')
    

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3"><strong>Course Create</strong> Dashboard</h1>

		<div class="row">
            <div class="col-md-3 mb-3">
                <a href="{{route('courses.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>

        <div class="row">
			<div class="col-12 col-lg-12 col-xxl-12 d-flex">
				<div class="card flex-fill">
					<div class="card-header">

						<h5 class="card-title mb-0">Adding Courses</h5>
					</div>

					<div class="card-body">
                        <form action="{{route('courses.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Title</label>
                                    <input type="text" name="title" id="" class="form-control">
                                    @error('title')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Description</label>
                                    <input type="text" name="description" id="" class="form-control">
                                    @error('description')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Category</label>
                                    <select name="category_id" id="" class="form-select">
                                        <option value="">Choose Course Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Course Duration</label>
                                    <input type="text" name="duration" id="" class="form-control">
                                    @error('duration')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">OJT Duration</label>
                                    <input type="text" name="ojt_duration" id="" class="form-control">
                                    @error('ojt_duration')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="form-label">Total Topic</label>
                                    <input type="number" name="total_topics" id="" class="form-control">
                                    @error('total_topics')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label for="" class="form-label">Hour</label>
                                    <input type="number" name="hours" id="" class="form-control">
                                    @error('hours')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">Fee</label>
                                    <input type="number" name="fee" id="" class="form-control">
                                    @error('fee')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">Discount</label>
                                    <input type="number" name="discount" id="" class="form-control">
                                    @error('discount')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="" class="form-label">Feature Image</label>
                                    <!-- <img src="{{ asset('public/img/')}}" alt=""> -->
                                    <input type="file" name="feature_image" id="" class="form-control">
                                    @error('feature_image')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label for="" class="form-label">Learning Outcomes</label>
                                    <textarea name="learning_outcome" id="" cols="30" rows="10" class="form-control"></textarea>
                                    @error('learning_outcome')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <textarea id="summernote"></textarea>
  
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button class="btn btn-primary">Add</button>
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