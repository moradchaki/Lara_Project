@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                        <h2 class="title">New Delivery</h2>
                        <form action="{{ url('deliveries')}}" method="post">

                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="titre">titre</label><br>
                                <input type="text" class="from-control" name="titre" placeholder="Your title" style="width: 100%;">
                            </div>
                    <div class="form-group">
                        <label for="slug">Slug</label><br>
                        <textarea class="from-control"  name="slug" style="width:100%;" placeholder="Your Slug"></textarea>
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
