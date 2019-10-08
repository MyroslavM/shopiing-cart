@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1>Sign In</h1>
            @if(count($errors) > 0)
                <div class="alert aletr-danger">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{ route('user.signin') }}" method="post">
                <div class="form-group">
                    <lable for="email">Email</lable>
                    <input type="text" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <lable for="password" >Password</lable>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                {{csrf_field()}}
            </form>
        </div>
    </div>
@endsection
