@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1> Your Profile</h1>
        </div>

        <div class="col-md-12 col-md-offset-12">
            @foreach($users as $user)
            <img src="{{$user->photo}}" alt="">
            <h4>{{$user->name}}</h4>
            <h4>{{$user->last_name}}</h4>
            <h5>numbur phone: {{$user->phone_number}}</h5>
            <h5>{{$user->age}} year</h5>

            @endforeach
            <a href="#" class="btn btn-success pull-right" role="button">Edit</a>
        </div>
    </div>
@endsection
