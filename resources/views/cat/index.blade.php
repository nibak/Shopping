
@extends('layouts.app')
@section('content')

  <div class="row"style="margin-bottom:20px">
    <div class="col-6">
      <h4>Categories</h4>
    </div>
    @auth
    <div class="col-6 d-flex justify-content-end"><a class="btn  btn-primary" href="/category/create">ADD NEW Category</a></div>
    @endauth
  </div>
  <div class="row">
    <table class="table">
        <thead>
        <tr>
            <th width="200">Category Id</th>
            <th width="200">Category Name</th>
            <th width="200">Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach($categories as $category)
              <tr>
                  <td>{{$category->id}}</td>
                  <td>{{$category->title}}</td>
                  <td>
                    @auth
                      <a class="btn btn-success"href="/categories/{{$category->id}}/edit">EDIT</a>
                      @endauth
                      <a class="btn btn-success"href="{{route('viewProduct',$category->id)}}">View Product</a>
                  </td>
              </tr>
          @endforeach


        </tbody>
    </table>
  </div>













<!-- <div class="row ">
    @foreach($categories as $category)
    <div class="col-sm-4 my-1" style="width: 18rem;">
      <div class="card-body">
        <h3 class="card-title">{{$category->id}}</h3>
        <p class="card-text">{{ $category->title }}</p>

      </div>
    </div>

    @endforeach
  </div>
</div> -->
@endsection
