@extends('layouts.main')

@section('content')

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3"><strong>Course</strong> Dashboard</h1>

		<div class="row">
            <div class="col-md-3 mb-3">
                <a href="{{route('courses.create')}}" class="btn btn-primary">Add New Course</a>
            </div>
        </div>

        <div class="row">
			<div class="col-12 col-lg-12 col-xxl-12 d-flex">
				<div class="card flex-fill">
					<div class="card-header">

						<h5 class="card-title mb-0">Courses</h5>
					</div>
					<table class="table table-hover my-0">
						<thead>
							<tr>
                                <th>No</th>
								<th>Name</th>
								<th>Photo</th>
								<th class="d-none d-xl-table-cell">Category</th>
								<th class="d-none d-xl-table-cell">Duration</th>
								<th>Hours</th>
								<th class="d-none d-md-table-cell">Lessons</th>
								<th class="d-none d-md-table-cell">Fee</th>
                                <th>Actions</th>
							</tr>
						</thead>

						<tbody>
                            @foreach ($courses as $course)
							<form action="{{route('courses.destroy',$course->id)}}" method="post">
                                @csrf
                                @method('delete')
                            
								<tr>
									<th>{{$from ++}}</th>
									<td>{{$course->title}}</td>
									<td><img src="{{asset('../../img/'.$course->feature_image)}}" alt="hi" height="150px" width="150px"></td>
									<td class="d-none d-xl-table-cell">{{$course->category->name}}</td>
									<td class="d-none d-xl-table-cell">{{$course->duration}}</td>
									<td><span class="badge bg-success">{{$course->hours}}</span></td>
									<td><span class="badge bg-success">{{$course->total_topics}}</span></td>
									<td class="d-none d-md-table-cell">{{$course->fee}}</td>
									<td class="d-none d-md-table-cell">
										<a href="{{route('courses.show',$course->id)}}" class="btn btn-primary">View</a>
										<a href="{{route('courses.edit',$course->id)}}" class="btn btn-warning">Edit</a>
										<button class="btn btn-outline-danger">Delete</button>
										
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
                {{$courses->links('pagination::bootstrap-5')}}
            </div>
        </div>

	</div>
</main>

   
@endsection