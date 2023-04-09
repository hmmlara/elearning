@extends('layouts.main')

@section('content')

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3"><strong>Trainers View</strong> Dashboard</h1>

		<div class="row">
            <div class="col-md-3 mb-3">
                <a href="{{route('trainers.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>

        <div class="row">
			<div class="col-12 col-lg-12 col-xxl-12 d-flex">
				<div class="card flex-fill">
					<div class="card-header">

						<h5 class="card-title mb-0">View Speciality</h5>
					</div>

					<div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>{{$trainer->name}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$trainer->email}}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{$trainer->phone}}</td>
                                </tr>
                                <tr>
                                    <th>Education</th>
                                    <td>{{$trainer->education}}</td>
                                </tr>
                                <tr>
                                    <th>Experience</th>
                                    <td>{{$trainer->experience}}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{$trainer->description}}</td>
                                </tr>
                                <tr>
                                    <th>Photo</th>
                                    <td> <img src="/img/{{$trainer->trainer_photo}}" class="w-30" height="150px"  alt=""></td>
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
