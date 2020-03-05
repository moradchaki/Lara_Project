@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                        <h2 class="title">New partner</h2>
                        <form action="{{ url('partners')}}" method="post">

                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Title</label><br>
                                <input type="text" class="from-control" name="title" placeholder="Your title" style="width: 100%;">
                            </div>
                    <div class="form-group">
                        <label for="description">Description</label><br>
                        <textarea class="from-control"  name="description" style="width:100%;" placeholder="Your Description"></textarea>
                         </div>
                         <div class="form-group">
                                <label for="img">Photo</label><br>
                                <input type="file" class="from-control" name="img" placeholder="Your title" style="width: 100%;">
                            </div>
                            @if($errors->any())
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <div class="form-group">
                                <input type="submit" class="from-control btn btn-primary" style="width: 100%;" value="Save" >
                            </div>
                        </form>
                    </div>
                </div>


@endsection
