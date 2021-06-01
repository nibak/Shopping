
@extends('layouts.app')
@section('content')
<div class="container">

<div class="col-12">
  <div class="row"style="margin-bottom:20px">
    <div class="col-6">
      <h4>Categories</h4>
    </div>
    <div class="col-6 d-flex justify-content-end"><a class="btn  btn-primary" href="/clients/new">ADD NEW Category</a></div>
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
                      <a class="btn btn-success"href="#">EDIT</a>
                      <a class="btn btn-success"href="#">BOOK A ROOM</a>
                  </td>
              </tr>
          @endforeach


        </tbody>
    </table>
  </div>


</div>

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
