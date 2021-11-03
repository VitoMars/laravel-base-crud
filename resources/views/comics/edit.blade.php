@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
      <div class="col-12">
         <form action="{{ route("comics.update", $comic["id"]) }}" method="post">
            @csrf
            @method("PUT")

            <div class="mt-3 mb-3">
              <label for="title" class="form-label">Title</label>
              <input value="{{ $comic["title"] }}" type="text" name="title" class="form-control" id="title" placeholder="Enter name of comic">
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <input value="{{ $comic["description"] }}" type="text" name="description" class="form-control" id="description" placeholder="Enter description">
            </div>
            <div class="mb-3">
               <label for="thumb" class="form-label">Link Image</label>
               <input value="{{ $comic["thumb"] }}" type="text" name="thumb" class="form-control" id="thumb" placeholder="Enter link image">
             </div>
             <div class="mb-3">
               <label for="price" class="form-label">Price</label>
               <input value="{{ $comic["price"] }}" type="text" name="price" class="form-control" id="price" placeholder="Enter price">
             </div>
             <div class="mb-3">
               <label for="series" class="form-label">Series</label>
               <input value="{{ $comic["series"] }}" type="text" name="series" class="form-control" id="series" placeholder="Enter series">
             </div>
             <div class="mb-3">
               <label for="type" class="form-label">Type</label>
               <input value="{{ $comic["type"] }}" type="text" name="type" class="form-control" id="type" placeholder="Enter type">
             </div>
             <div class="mb-3">
               <label for="sale_date" class="form-label">Sale Date</label>
               <input value="{{ $comic["sale_date"] }}" type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Enter Sale Date">
             </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
   </div>
</div>
@endsection