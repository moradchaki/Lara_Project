@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-20">
                <h2 class="title">List</h2>
                    <a href="{{ url('partners/create') }}" class="btn btn-primary">New Partner</a>
            </div>
          </div>
        </div>
        <div class="container">
          <br>
         <div class="row">
                 @foreach($partners as $partner)
                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <img src=" {{ asset('/images/imagess/$partner->img') }}">
                      <div class="caption">
                        <h3>{{ $partner->title}}</h3>
                        <small>{{ $partner->created_at }}</small>
                        <p><form action="{{ asset('partners/'.$partner->id) }}" method="post">
                                 {{ csrf_field() }}
                                 {{ method_field('DELETE') }}
                                <a href="{{ url('partners/'.$partner->id.'/edit') }}" class="btn btn-warning">Editer</a>
                               <button type="submit" class="btn btn-danger">Supprimer</button>
                               </form>
                        </p>
                      </div>
                    </div>
                  </div>
                @endforeach
                </div>
              </div>
            </div>
@endsection
