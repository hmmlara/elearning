@extends('layouts.main')

@section('content')

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3"><strong>Speciality</strong> Dashboard</h1>

		<div class="row">
            <div class="col-md-3 mb-3">
                <a href="{{route('specialities.create')}}" class="btn btn-primary">Add New Speciality</a>
            </div>
        </div>

        <div class="row">
			<div class="col-12 col-lg-12 col-xxl-12 d-flex">
				<div class="card flex-fill">
					<div class="card-header">

						<h5 class="card-title mb-0">Specialities</h5>
					</div>
					<table class="table table-hover my-0">
						<thead>
							<tr>
                                <th>No</th>
								<th>ID</th>
								<th>Name</th>
                                <th>Parent</th>
							</tr>
						</thead>

						<tbody>
                            @foreach ($specialities as $speciality)
							<form action="{{route('specialities.destroy',$speciality->id)}}" method="post">
                                @csrf
                                @method('delete')
									<tr>
										<th>{{$from ++}}</th>
										<td>{{$speciality->id}}</td>
										<td>{{$speciality->name}}</td>
										<td>{{$speciality->parent}}</td>
										<td class="d-none d-md-table-cell">
											<a href="{{route('specialities.show',$speciality->id)}}" class="btn btn-primary">View</a>
											<a href="{{route('specialities.edit',$speciality->id)}}" class="btn btn-warning">Edit</a>
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
                {{$specialities->links('pagination::bootstrap-5')}}
            </div>
        </div>

	</div>
</main>

   
@endsection