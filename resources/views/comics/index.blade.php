@extends('layouts.app')

@section('content')
    <div class="container">
      <h1>Lista dei Comics</h1>
      {{-- @dump($comics) --}}
      <div class="row">
        <div class="col-12">
          <table class="table table-striped">
            <thead>
              <tr class="">
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Type</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($comics as $comic)
              <tr>
                <th scope="row">{{$comic["id"]}}</th>
                <td>{{$comic["title"]}}</td>
                <td>{{$comic["description"]}}</td>
                <td>{{$comic["type"]}}</td>
                {{-- Provare senza ID --}}
                <td><a href="{{ route("comics.show", $comic["id"]) }}" class="btn btn-info">Details</a></td>
                <td><a href="{{ route("comics.edit", $comic["id"]) }}" class="btn btn-warning">Modify</a></td>
                <td>
                  <form action="{{ route("comics.destroy", $comic["id"]) }}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Delete</button>
                    {{-- <a href="{{ route("comics.destroy", $comic["id"]) }}" class="btn btn-danger" type="submit">Delete</a> --}}
                  </form>
                </td>
              </tr>
              @endforeach

             
            
            </tbody>
          </table>
        </div>
      </div>
      
    </div>
@endsection 