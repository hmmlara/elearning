@extends('layouts.main')

@section('content')

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3"><strong>Speciality Edit</strong> Dashboard</h1>

		<div class="row">
            <div class="col-md-3 mb-3">
                <a href="{{route('specialities.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>

        <div class="row">
			<div class="col-12 col-lg-12 col-xxl-12 d-flex">
				<div class="card flex-fill">
					<div class="card-header">

						<h5 class="card-title mb-0">Editing Speciality</h5>
					</div>

					<div class="card-body">
                        <form action="{{route('specialities.update',$speciality->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Title</label>
                                    <input type="text" name="name" id="" class="form-control" value="{{$speciality->name}}">
                                    @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="" class="form-label">Parent</label>
                                    <select name="parent" id="" class="form-select">
                                        <option value="0">Choose Parent</option>
                                        @foreach ($parents as $parent)
                                            @if($parent->id==$speciality->parent)
                                                <option value="{{$parent->id}}" selected>{{$parent->name}}</option>
                                            @else
                                                <option value="{{$parent->id}}">{{$parent->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
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