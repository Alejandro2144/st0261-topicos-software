@extends('layouts.app')

@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])

@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="https://acortar.link/8MH55A" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    @if($viewData['product']['price'] > 100)
                        <span style="color: red;">{{ $viewData['product']['name'] }}</span>
                    @else
                        {{ $viewData['product']['name'] }}
                    @endif
                </h5>
                <p class="card-text"><strong class="bold-label">Descripción:</strong> {{ $viewData["product"]["description"] }}</p>
                <p class="card-text"><strong class="bold-label">Categoría:</strong> {{ $viewData["product"]["category"] }}</p>
                <p class="card-text"><strong class="bold-label">Precio:</strong> {{ $viewData["product"]["price"] }}</p>
                <p class="card-text"><strong class="bold-label">Stock:</strong> {{ $viewData["product"]["stock"] }}</p>
                <form method="POST" action="{{ route('product.delete', ['id' => $viewData['product']['id']]) }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Eliminar" />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
