@extends('layouts.main')

@section('content')
    

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3"><strong>Course Category</strong> Dashboard</h1>

		<div class="row">
            <div class="col-md-3 mb-3">
                <a href="{{route('categories.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>

        <div class="row">
			<div class="col-12 col-lg-12 col-xxl-12 d-flex">
				<div class="card flex-fill">
					<div class="card-header">

						<h5 class="card-title mb-0">Adding Category</h5>
					</div>

					<div class="card-body">
                        <form action="{{route('categories.store')}}" method="post">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" name="name" id="" class="form-control">
                                    @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    <button class="btn btn-success mt-2">Add</button>
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