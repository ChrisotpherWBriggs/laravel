@extends('layouts.app')

@section('content')
<div class="container">
	<div class="card col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
	  <div class="card-header bg-primary">
	  	<h3 style="text-align: center;">Companies</h3>
	  </div>
	  <div class="card-body">
	    <ul class="list-group">
		  @foreach($companies as $company)
			<li class="list-group-item"><a href="/companies/{{ $company->id }}">{{ $company->name}}</a></li>
		  @endforeach

		</ul>
	  </div>
	</div>
</div>
@endsection