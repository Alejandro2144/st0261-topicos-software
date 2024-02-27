@extends('layouts.app')

@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])

@section('content')
<div class="row">
    @foreach ($viewData["products"] as $product)
    <div class="col-md-4 col-lg-3 mb-2">
        <div class="card">
            <img src="https://acortar.link/8MH55A" alt="Imagen de un producto">
            <div class="card-body text-center">
                <p>{{ $product["id"] }}</p>
                <p>{{ $product["name"] }}</p>
                <a href="{{ route('product.show', ['id'=> $product["id"]]) }}" class="btn bg-primary text-white">Ver</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection


