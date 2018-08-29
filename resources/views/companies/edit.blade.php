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

<div class="row cold-9-md-9 col-lg-9 col-sm-9 pull-left">

<div class="row col-md-12 col-lg-12 col-sm-12" style="background:white; margin 10px;">


</div>
</div>


<form method="post" action="{{ route('companies.update', [$company->id) }}">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


      
  </div>
</div>

@endsection

</body>
</html>

 

