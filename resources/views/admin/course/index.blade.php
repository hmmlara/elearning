@extends('layouts.main')

@section('content')
    <h2>Course Index page</h2>

	<main class="content">
		
		<div class="container-fluid p-0">

			<h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

            <div class="row">
                <div class="col-md-6">
                    <button class="btn btn-success m-3">Add Course</button>
                </div>
            </div>

			<div class="row">
				<div class="col-12 col-lg-12 col-xxl-12 d-flex">
					<div class="card flex-fill">
						<div class="card-header">

							
						</div>
						<table class="table table-hover my-0">
							<thead>
								<tr>
                                    <th>No</th>
									<th>Name</th>
									<th class="d-none d-xl-table-cell">Category</th>
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
                                    {{-- <td>{{$loop->iteration}}</td> --}}
                                    <td>{{$from++}}</td>
									<td>{{$course->title}}</td>
									<td class="d-none d-xl-table-cell">{{$course->category->name}}</td>
									<td class="d-none d-xl-table-cell">{{$course->duration}}</td>
									<td><span class="badge bg-warning">{{$course->hours}}</span></td>
									<td class="d-none d-md-table-cell">{{$course->total_topics}}</td>
									<td class="d-none d-md-table-cell">{{$course->fee}}</td>
									<td class="d-none d-md-table-cell"><a href="" class="btn btn-success">View</a>
                                        <a href="" class="btn btn-primary">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>



								</tr>
                                @endforeach
								{{-- <tr>
									<td>Project Wombat</td>
									<td class="d-none d-xl-table-cell">01/01/2021</td>
									<td class="d-none d-xl-table-cell">31/06/2021</td>
									<td><span class="badge bg-warning">In progress</span></td>
									<td class="d-none d-md-table-cell">William Harris</td>
								</tr> --}}
							</tbody>
						</table>

                       
					</div>
                   
				</div>
                {{ $courses->links("pagination::bootstrap-5")}}
				
			</div>

		</div>
	</main>

    
@endsection