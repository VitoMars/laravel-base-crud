@extends('layouts.app')

@section('content')
    <div class="container">
      <h1>Lista dei Comics</h1>
      {{-- @dump($comics) --}}
      <div class="row">
        <div class="col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Type</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($comics as $comic)
              <tr>
                <th scope="row">{{$comic["id"]}}</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              @endforeach

             
            
            </tbody>
          </table>
        </div>
      </div>
      
    </div>
@endsection 