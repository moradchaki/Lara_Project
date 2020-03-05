@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ url('deliveries/'.$delivery->id)}}" method="post">
                    <input type="hidden" name="_method" value="PUT">

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">titre</label><br>
                        <input type="text" class="from-control" name="titre" style="width:100%;" value="{{ $delivery->titre }}">
                    </div>

                    <div class="form-group">
                        <label for="slug">Slug</label><br>
                        <textarea class="from-control"  name="slug" style="width:100%;" placeholder="Your Slug">{{ $delivery->slug }}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="from-control btn btn-danger"
                        style="width:100%;" value="Update">
                    </div>
                </form>
            </div>
        </div>
@endsection
