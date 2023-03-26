@extends('layout.main')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        
        <div class="row">
          <div class="col-md-4 ms-auto ">
            <a href="{{route('courses.index')}}" class="btn btn-dark">Back</a>
          </div>
        </div>
     <div class="card content-center col-md-6">
      <div class="card-title">
        <h2>Course Information</h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <span>Title::{{$courses->title}}</span><br>
          <span>Description::{{$courses->description}}</span><br>
          <span>Duration::{{$courses->duration}}</span><br>
          <span></span> 
        </div>
      </div>
     </div>

    </div>
</main>
@endsection

    


