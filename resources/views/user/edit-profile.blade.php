@extends('layouts.master')
@section('title')
    edit profile
@endsection
@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1> Edit Profile</h1>
    </div>
        <div class="col-md-4 col-md-offset-4">
            <form action="{{route('user.update-profile')}}" method="post">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input value="{{$user->name}}" type="text" id="name" class="form-control" required name="name">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input value="{{$user->last_name}}" type="text" id="last_name" class="form-control" required name="last_name">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="phone_number">Phone number</label>
                            <input  value="{{$user->phone_number}}" type="text" id="phone_number" class="form-control" required name="phone_number">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input value="{{$user->age}}" type="text" id="age" class="form-control" required name="age">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success"> Edit</button>
                {{csrf_field()}}
            </form>
        </div>
</div>
@endsection
