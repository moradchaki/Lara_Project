@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ url('cities/'.$city->id)}}" method="post">
                    <input type="hidden" name="_method" value="PUT">

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Title</label><br>
                        <input type="text" class="from-control" name="title" style="width:100%;" value="{{ $city->title }}">
                    </div>

                    <div class="form-group">
                        <label for="presentation">Presentation</label><br>
                        <textarea class="from-control"  name="presentation" style="width:100%;" placeholder="Your Presentation">{{ $city->presentation }}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="from-control btn btn-danger"
                        style="width:100%;" value="Update">
                    </div>
                </form>
            </div>
        </div>
@endsection
