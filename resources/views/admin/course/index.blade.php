@extends('layouts.main')

@section('content')

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

         <div class="row mb-3">
            <div class="col-md-3">
                <a href="{{route('courses.create')}}" class="btn btn-success">Add New Course</a>
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
								<th class="d-none d-xl-table-cell">Categories</th>
								<th class="d-none d-xl-table-cell">Duration</th>
								<th>Hours</th>
								<th class="d-none d-md-table-cell">Lessons</th>
								<th class="d-none d-md-table-cell">Fee</th>
								<th class="d-none d-md-table-cell">Actions</th>
							</tr>
						</thead>
						<tbody>

                        @foreach ($courses as $course)
                            <tr>
                                <td>{{$from++}}</td>
                                <td>{{$course->title}}</td>
                                <td class="d-none d-xl-table-cell">{{$course->category->name}}</td>
                                <td class="d-none d-xl-table-cell">{{$course->duration}}</td>
                                <td class="d-none d-xl-table-cell">{{$course->hours}}</td>
                                <td class="d-none d-xl-table-cell"><span class="badge bg-warning">{{$course->total_topics}}</span></td>
                                <td class="d-none d-xl-table-cell">{{$course->fee}}</td>
                                <td class="d-none d-md-table-cell">
                                    <a href="" class="btn btn-success">View</a>
                                    <a href="{{route('courses5.edit',$course->id)}}" class="btn btn-success">Edit</a>
                                    <a href="" class="btn btn-success">Delete</a>
                                </td>
                            </tr>
                        @endforeach

						
						</tbody>
					</table>
				</div>
			</div>
		</div>
        <div class="row mt-2">
            <div class="col-md-12">
                {{$courses->links('pagination::bootstrap-5')}}
            </div>
        </div>
	</div>
</main>





@endsection