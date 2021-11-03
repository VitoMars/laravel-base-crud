@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h1>Dettaglio: {{ $comic["title"] }}</h1>
            <ul>
               <img src="{{ $comic["thumb"] }}" alt="">
               <li><b>Title:</b> {{ $comic["title"] }}</li>
               <li><b>Description:</b> {{ $comic["description"] }}</li>
               <li><b>Price:</b> {{ $comic["price"] }} €</li>
               <li><b>Series:</b> {{ $comic["series"] }}</li>
               <li><b>Type:</b> {{ $comic["type"] }}</li>
            </ul>
         </div>
      </div>
   </div>
@endsection