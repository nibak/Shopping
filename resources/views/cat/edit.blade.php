@extends('layouts.app')
@section('content')

    <div class="form-content">
    <form method="product" action="/products/{{$product->id}}">
            @method('PUT')
            @csrf

            <div class="row">
              <div class="form-group col-6">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{$product->title}}">
              </div>

              <div class="form-group col-6">
                <label for="title">Colour</label>
                <input type="text" class="form-control @error('colour') is-invalid @enderror" id="colour" name="colour" value="{{$product->colour}}">
              </div>
            </div>

            <div class="row">
              <label for="content">Content</label>
              <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="10">{{$product->content}}</textarea>
            </div>
            <br>
        <input class="btn btn-primary" type="submit" value="Submit">
        <a class="btn btn-warning mx-1" href="/products/">Cancel</a>
    </form>
  </div>

@endsection
