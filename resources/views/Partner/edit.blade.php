@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ url('partners/'.$partner->id)}}" method="post">
                    <input type="hidden" name="_method" value="PUT">

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Title</label><br>
                        <input type="text" class="from-control" name="title" style="width:100%;" value="{{ $partner->title }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label><br>
                        <textarea class="from-control"  name="description" style="width:100%;" placeholder="Your Description">{{ $partner->description }}</textarea> 
                    </div>
                     <div class="form-group">
                                <label for="img">Photo</label><br>
                                <input type="file" class="from-control" name="img" placeholder="Your title" style="width: 100%;">
                            </div>
                    <div class="form-group">
                        <input type="submit" class="from-control btn btn-danger"
                        style="width:100%;" value="Update">
                    </div>
                </form>
            </div>
        </div>
@endsection
