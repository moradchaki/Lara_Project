@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <img src="/images/Uploads/{{ $user->image }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2>{{ $user->name }}'s Profile</h2>
            <h5>{{ $user->email }}</h5>
            <h5>{{ $user->created_at }}</h5>
            <h5>{{ $user->updated_at }}</h5>
            <form enctype="multipart/form-data" action="{{ route('profile') }}" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="image"><br>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary" style="width: 100%;"><br><br>
                <a href="/" class="pull-right btn btn-sm btn-success"style="width: 100%;">Home/Retour</a>
            </form>
        </div>
    </div>
</div>

@endsection