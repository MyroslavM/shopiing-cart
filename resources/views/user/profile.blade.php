@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1> Your Profile</h1>
        </div>

        <div class="col-md-9 col-md-offset-9">
            <img src="{{$user->photo}}" alt="Your photo" height="150px">
            <h4>{{$user->name}}</h4>
            <h4>{{$user->last_name}}</h4>
            <h5>{{$user->phone_number}}</h5>
            <h5>{{$user->age}} year</h5>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <a href="{{route('user.edit-profile')}}" class="btn btn-success pull-right" type="button"
                       role="button">Edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection
