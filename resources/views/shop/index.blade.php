
@extends('layouts.app')
@section('content')
<div class="row ">
    @foreach($products as $product)
    <div class="col-sm-4 my-1" style="width: 18rem;">
      <img class="card-img-top" src="/storage/images/{{ $product->image }}" alt="Card image cap">
      <div class="card-body">
        <h3 class="card-title">{{$product->title}}</h3>
        <p class="card-text">{{ $product->content }}</p>
        <form action="/products/{{$product->id}}" method="product">
          @method('DELETE')
          @csrf

          <a class="btn btn-primary mx-1 " href="/products/{{$product->id}}">Show</a>
            @auth
          <a class="btn btn-primary mx-1" href="/products/{{$product->id}}/edit">Edit</a>
          <button type="submit" title="delete" class="btn btn-danger mx-1" >Delete</button>
           @endauth
         </form>
      </div>
    </div>


      <!-- <div class="col-sm-4 my-1">
        <div class="card">
          <div class="card-body
              @if ($product->colour == "Yellow") bg-warning
              @elseif ($product->colour == "Orange") orange
              @endif
          ">
            <h5 class="card-title">{{$product->title}}</h5>
            <p class="card-text">{{ $product->content }}</p>
            <img src="/storage/images/{{ $product->image }}" alt="no iMage">


            <form action="/products/{{$product->id}}" method="product">
              @method('DELETE')
              @csrf

              <a class="btn btn-primary mx-1 " href="/products/{{$product->id}}">Show</a>
                @auth
              <a class="btn btn-success mx-1" href="/products/{{$product->id}}/edit">Edit</a>
              <button type="submit" title="delete" class="btn btn-danger mx-1" >Delete</button>
               @endauth
             </form>
          </div>
        </div>
      </div> -->
    @endforeach
  </div>
</div>
@endsection
