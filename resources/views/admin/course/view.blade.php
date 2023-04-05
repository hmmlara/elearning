@extends('layouts.main')

@section('content')

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3"><strong>Course View</strong> Dashboard</h1>

		<div class="row">
            <div class="col-md-3 mb-3">
                <a href="{{route('courses.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>

        <div class="row">
			<div class="col-12 col-lg-12 col-xxl-12 d-flex">
				<div class="card flex-fill">
					<div class="card-header">

						<h5 class="card-title mb-0">View Courses</h5>
					</div>

					<div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Feature Image</th>
                                    <td><img src="/img/{{$course->feature_image}}" alt="" width="150px" height="150px"></td>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <td>{{$course->title}}</td>
                                </tr>
                                <tr>
                                    <th>Category</th>
                                    <td>{{$course->category->name}}</td>
                                </tr>
                                <tr>
                                    <th>Duration</th>
                                    <td>{{$course->duration}}</td>
                                </tr>
                                <tr>
                                    <th>OJT Duration</th>
                                    <td>{{$course->ojt_duration}}</td>
                                </tr>
                                <tr>
                                    <th>Hour</th>
                                    <td>{{$course->hours}}</td>
                                </tr>
                                <tr>
                                    <th>Total Topics</th>
                                    <td>{{$course->total_topics}}</td>
                                </tr>
                                <tr>
                                    <th>Fee</th>
                                    <td>{{$course->fee}}</td>
                                </tr>
                                <tr>
                                    <th>Discount</th>
                                    <td>{{$course->discount}}</td>
                                </tr>
                                <tr>
                                    <th>Learining Outcomes</th>
                                    <td>{{$course->learning_outcome}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
				</div>
			</div>
		</div>


	</div>
</main>

   
@endsection