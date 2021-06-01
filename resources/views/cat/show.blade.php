@extends('layouts.app')
@section('content')

    <div class="form-content">
            @method('PUT')
            @csrf
            @foreach($category as $categories)
            <div class="row" style="margin-bottom:40px">
               <div class="col-6">
                <img class="card-img-top" src="/storage/images/{{ $categories->image }}" alt="Card image cap">
               </div>
               <div class=" col-6">
                <h3 class="card-title">{{$categories->title}}</h3>
                <p class="card-text">{{ $categories->content }}</p>
               </div>
            </div>
                    @endforeach
            <br>
            <br>
  </div>
  <div class=" d-flex justify-content-end"><a class="btn  btn-primary" href="/products/">Back</a></div>

</div>

@endsection
