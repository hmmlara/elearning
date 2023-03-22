@extends('layouts.main')

@section('content')
    <h2>Topic Index page</h2>

	<main class="content">
		
		<div class="container-fluid p-0">

			{{-- <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1> --}}

            <div class="row">
                <div class="col-md-6">
                    <button class="btn btn-success m-3">Add Topic</button>
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
									<th>Course Name</th>
									<th class="d-none d-xl-table-cell">Topic Name</th>
									<th class="d-none d-xl-table-cell">description</th>
									<th class="d-none d-xl-table-cell">function</th>
                                    


								</tr>
							</thead>
							<tbody>
								@foreach ($topics as $topic)
                                <tr>
                                    {{-- <td>{{$loop->iteration}}</td> --}}
                                    <td>{{$from++}}</td>
									<td>{{$topic->course->title}}</td>
									<td class="d-none d-xl-table-cell">{{$topic->topic_name}}</td>
									<td class="d-none d-xl-table-cell">{{$topic->description}}</td>
									
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
                {{ $topics->links("pagination::bootstrap-5")}}
				
			</div>

		</div>
	</main>

    
@endsection