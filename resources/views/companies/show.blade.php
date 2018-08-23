<html>
<body>
<style>
.card1 {
  background-color: #008c91;
  color: #ffffff;
}

.card2 {
  background-color: #d46718;
  color: #ffffff;
}

.card3 {
  background-color: #ff0000;
  color: #ffffff;
}

</style>

@extends('layouts.app')

@section('content')

<div class="wrapper" style="float:right">

    <!-- Sidebar -->
    <nav id="sidebar">
      <ol class="list-unstyled">
        <li class="list-item">March 2014</li>
      </ol>
        ...
    </nav>

    <!-- Page Content -->
    <div id="content">
</div>
</div>
    
 

<div class="row">
<div class="jumbotron bg-primary col-md-6 col-lg-6 col-md-offset-3 col-offset-lg-3">
    <div class="card-body">
    <div class="card bg-primary">
      <div class="card-body text-center">
        <h3 class="card-text">{{ $company->name }}</h3>

      </div>
    </div>
    </div>
</div>
</div>
<div class="row col-md-6 col-lg-6 col-md-offset-3 col-offset-lg-3">

      <p>{{ $company->description }}</p>
</div>
  

<div class="row" style="padding-top: 20px; background-color: white; margin: 10px;">

@foreach($company->projects as $project)
  <div class="card card1 col-md-4 col-lg-4" style="padding-left: 5px;">
    <h2 class="card-header">{{ $project->name}}</h2>
    <p class="card-text">{{ $project->description}}</p>
    <p><a class="btn btn-primary" href="/projects/{{ $project->id }}" role="button"> View Project >> </a></p> 
    </div>
  @endforeach
    <div class="card card2 col-md-4 col-lg-4">
      <div class="card-body text-center">
        <p class="card-text">Some text inside the third card</p>
      </div>
    </div>
    <div class="card card3 col-md-4 col-lg-4">
      <div class="card-body text-center">
        <p class="card-text">Some text inside the fourth card</p>
      </div>
    </div>  
  </div>
</div>

@endsection

</body>
</html>

 

