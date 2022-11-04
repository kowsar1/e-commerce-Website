@extends('backend.master')


@section('content')

<h1>This is  User profile page</h1>
<a href="{{route('user.create')}}" class="btn btn-primary"> 
    Create new user
</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($user as $data)
    <tr>
      
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->description}}</td>
      <td>{{$data->status}}</td>
      <td></td>
     
    </tr>
    @endforeach
  </tbody>
</table>

@endsection