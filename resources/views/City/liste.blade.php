@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-20">
                <h2 class="title">List</h2>
                    <a href="{{ url('cities/create') }}" class="btn btn-success">New City</a>
            </div>
           <table class="table">
          <head>
           <tr>
             <th>Id</th>
             <th>Titre</th>
             <th>Description</th>
             <th>Date</th>
             <th>Action</th>
           </tr>
          </head>
          <body>
            @foreach($cities as $city)
              <tr>
              <td>{{ $city->title }}</td>
              <td>{{ $city->presentation }}</td>
              <td>{{ $city->created_at }}</td>
              <td>
            
               <form action="{{ url('cities/'.$city->id) }}" method="post">
                 {{ csrf_field() }}
                 {{ method_field('DELETE') }}
               <a href="{{ url('cities.edit/'.$city->id.'/edit') }}" class="btn btn-warning">Editer</a>
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
