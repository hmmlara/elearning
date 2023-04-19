@extends('layouts.main')

@section('content')

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3"><strong>Trainer Edit</strong> Dashboard</h1>

		<div class="row">
            <div class="col-md-3 mb-3">
                <a href="{{route('trainers.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>

        <div class="row">
			<div class="col-12 col-lg-12 col-xxl-12 d-flex">
				<div class="card flex-fill">
					<div class="card-header">

						<h5 class="card-title mb-0">Editing Trainers</h5>
					</div>


					<div class="card-body">
                        <form action="{{route('trainers.update',$trainer->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" name="name" id="" class="form-control" value="{{$trainer->name}}">
                                    <span class="text-danger">
                                        @error('name')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="col-md-4">
                                    <label for="" class="form-label">Email</label>
                                    <input type="text" name="email" id="" class="form-control" value="{{$trainer->email}}">
                                    <span class="text-danger">
                                        @error('email')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="col-md-4">
                                    <label for="" class="form-label">Phone</label>
                                    <input type="number" name="phone" id="" class="form-control" value="{{$trainer->phone}}">
                                    <span class="text-danger">
                                        @error('phone')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="col-md-4">
                                    <label for="" class="form-label">Education</label>
                                    <input type="text" name="education" id="" class="form-control" value="{{$trainer->education}}">
                                    <span class="text-danger">
                                        @error('education')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="col-md-4">
                                    <label for="" class="form-label">Experience</label>
                                    <input type="text" name="experience" id="" class="form-control" value="{{$trainer->experience}}">
                                    <span class="text-danger">
                                        @error('experience')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="col-md-4">
                                    <label for="" class="form-label">Description</label>
                                    <input type="text" name="description" id="" class="form-control" value="{{$trainer->description}}">
                                    <span class="text-danger">
                                        @error('description')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="col-md-4">
                                    <label for="" class="form-label">Trainer Photo</label>
                                    <input type="file" name="trainer_photo" id="" class="form-control" value="{{$trainer->trainer_photo}}">
                                    <span class="text-danger">
                                        @error('trainer_photo')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button class="btn btn-primary">Update</button>
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
