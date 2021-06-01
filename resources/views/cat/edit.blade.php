@extends('layouts.app')
@section('content')

    <div class="form-content">
    <form method="category" action="/categories/{{$category->id}}">
            @method('PUT')
            @csrf

            <div class="row">
              <div class="form-group col-6">
                <label for="title">Title</label>
                <input type="" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{$category->title}}">
              </div>

              <div class="form-group col-6">
                <label for="title">Category Name</label>
                <input type="text" class="form-control @error('colour') is-invalid @enderror" id="colour" name="colour" value="{{$category->name}}">
              </div>
            </div>


            <br>
        <input class="btn btn-primary" type="submit" value="Submit">
        <a class="btn btn-warning mx-1" href="/categorys/">Cancel</a>
    </form>
  </div>

@endsection
