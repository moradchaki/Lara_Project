@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-20">
                <h2 class="title">List</h2>
                    <a href="{{ url('deliveries/create') }}" class="btn btn-success">New Delivery</a>
            </div>
            <table class="table">
          <head>
           <tr>
             <th>Titre</th>
             <th>Description</th>
             <th>Date</th>
             <th>Action</th>
           </tr>
          </head>
          <body>
            @foreach($deliveries as $delivery)
              <tr>
              <td>{{ $delivery->titre }}</td>
              <td>{{ $delivery->slug }}</td>
              <td>{{ $delivery->created_at }}</td>
              <td>
            
               <form action="{{ url('deliveries/'.$delivery->id) }}" method="post">
                 {{ csrf_field() }}
                 {{ method_field('DELETE') }}
               <a href="{{ url('deliveries/'.$delivery->id.'/edit') }}" class="btn btn-warning">Editer</a>
               <button type="submit" class="btn btn-danger">Supprimer</button>
               </form>
              </td>
              </tr>

            @endforeach  
          </body>
          </table>
          </div>
    </div>
</div>

@endsection
