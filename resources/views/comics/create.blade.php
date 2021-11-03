@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
      <div class="col-12">
         <form action="{{ route("comics.store") }}" method="post">
            @csrf
            @method("POST")

            <div class="mt-3 mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" name="title" class="form-control" id="title" placeholder="Enter name of comic">
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <input type="text" name="description" class="form-control" id="description" placeholder="Enter description">
            </div>
            <div class="mb-3">
               <label for="thumb" class="form-label">Link image</label>
               <input type="text" name="thumb" class="form-control" id="thumb" placeholder="Enter link image">
             </div>
             <div class="mb-3">
               <label for="price" class="form-label">Price</label>
               <input type="text" name="price" class="form-control" id="price" placeholder="Enter price">
             </div>
             <div class="mb-3">
               <label for="series" class="form-label">Series</label>
               <input type="text" name="series" class="form-control" id="series" placeholder="Enter series">
             </div>
             <div class="mb-3">
               <label for="type" class="form-label">Type</label>
               <input type="text" name="type" class="form-control" id="type" placeholder="Enter type">
             </div>
             <div class="mb-3">
               <label for="sale_date" class="form-label">Sale Date</label>
               <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Enter Sale Date">
             </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
   </div>
</div>
@endsection