@extends('layout.main')

@section('content')

<div class="row">
    <div class="col">
    <h1>user information</h1>

    @isset($user['name'])
 
<p><strong>Name: </strong>{{$user['name']}}</p>
<p><strong>Email: </strong>{{$user['email']}}</p>
<p><strong>Phone: </strong>{{$user['phone']}}</p>
@endif
    </div>
</div>

@endsection