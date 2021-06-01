@extends('layouts.app')
@section('content')

    <div class="form-content">
            @method('PUT')
            @csrf

            <div class="row">
               <div class="col-6">
                <img class="card-img-top" src="/storage/images/{{ $product->image }}" alt="Card image cap">
               </div>
               <div class=" col-6">
                <h3 class="card-title">{{$product->title}}</h3>
                <p class="card-text">{{ $product->content }}</p>
               </div>
            </div>
            <br>
            <br>
  </div>
  <div class=" d-flex justify-content-end"><a class="btn  btn-primary" href="/products/">Back</a></div>

</div>

@endsection
