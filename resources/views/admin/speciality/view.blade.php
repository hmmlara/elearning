@extends('layouts.main')

@section('content')

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3"><strong>Course View</strong> Dashboard</h1>

		<div class="row">
            <div class="col-md-3 mb-3">
                <a href="{{route('specialities.index')}}" class="btn btn-primary">Back</a>
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
                                    <td>{{$speciality->name}}</td>
                                </tr>
                                <tr>
                                    <th>Category</th>
                                    <td>{{$speciality->parent}}</td>
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