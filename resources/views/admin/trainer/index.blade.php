@extends('layouts.main')

@section('content')

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3"><strong>Trainers</strong> Dashboard</h1>

         <div class="row mb-3">
            <div class="col-md-3">
                <a href="{{ route('trainers.create')}}" class="btn btn-success">Add New Trainers</a>
            </div>
         </div>

		<div class="row">
			<div class="col-12 col-lg-12 col-xxl-12 d-flex">
				<div class="card flex-fill">
					<div class="card-header">

						<h5 class="card-title mb-0">Trainers</h5>
					</div>
					<table class="table table-hover my-0">
						<thead>
							<tr>
                                <th>No</th>
								<th>Name</th>
								<th class="d-none d-xl-table-cell">Email</th>
								<th class="d-none d-xl-table-cell">Phone</th>
                                <th class="d-none d-xl-table-cell">Image</th>
								<th class="d-none d-md-table-cell">Actions</th>
							</tr>
						</thead>
						<tbody>

                        @foreach ($trainers as $trainer)
                            <form action="{{route('trainers.destroy',$trainer->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <tr>
                                    <td>{{$from++}}</td>
                                    <td class="d-none d-xl-table-cell">{{$trainer->name}}</td>
                                    <td class="d-none d-xl-table-cell">{{$trainer->email}}</td>
                                    <td class="d-none d-xl-table-cell">{{$trainer->phone}}</td>
                                    <td class="d-none d-xl-table-cell">
                                    <img src="/img/{{$trainer->trainer_photo}}" class="w-50" height="100px"  alt="">
                                    </td>
                                    <td class="d-none d-md-table-cell">
                                        <a href="{{ route('trainers.show',$trainer->id) }}" class="btn btn-success">View</a>
                                        <a href="{{ route('trainers.edit',$trainer->id)}}" class="btn btn-success">Edit</a>
                                        <button class="btn btn-success">Delete</button>
                                    </td>
                                </tr>
                            </form>
                        @endforeach


						</tbody>
					</table>
				</div>
			</div>
		</div>
        <div class="row mt-2">
            <div class="col-md-12">
                {{$trainers->links('pagination::bootstrap-4')}}
            </div>
        </div>
	</div>
</main>

@endsection
