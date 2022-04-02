@extends('front.front_master')
@section('front')


<h3>Registered Users Table</h3>

<table id="t">
    <thead>
    <tr>
        <th>SL</th>

      <th>User name</th>
      <th>Email</th>
      <th>Date of birth</th>
      <th>City</th>
      <th>Country</th>
      <th>Activity</th>
      <th>Action</th>




    </tr>
    </thead>

    <tbody>
        @foreach ($alldata as $key => $user)


    <tr>
        <td>{{$key+1}}</td>
        <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>
        {{ Carbon\Carbon::parse ($user->dob) ->format (' d M Y' )
        }}</td>
      <td>{{$user->city}}</td>
      <td>{{$user->country}}</td>
      <td>{{$user->activity}}</td>
      <td><a href="{{route('user.edit',$user->id)}}" class="btn btn-danger btn-flat mb-5" id="edit" >Edit</a> |
        <a href="{{route('user.delete',$user->id)}}" class="btn btn-danger btn-flat mb-5" id="delete" >Delete</a>
      </td>
      

    </tr>
    @endforeach

    </tbody>
 
    
  </table>



@endsection