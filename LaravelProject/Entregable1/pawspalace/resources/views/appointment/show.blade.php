@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://i0.wp.com/clinicaveterinariaasis.es/wp-content/uploads/2023/03/logo-png.png?fit=846%2C753&ssl=1" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><strong class="bold-label">Motivo de la consulta: </strong>
            {{ $viewData['appointment']->getReason() }}
        </h5>
        <p class="card-text"><strong class="bold-label">Duración de la consulta:</strong> {{ $viewData['appointment']->getDuration() }}</p>
        <p class="card-text"><strong class="bold-label">Estado consulta:</strong> {{ $viewData['appointment']->getStatus() }}</p>
        <p class="card-text"><strong class="bold-label">Precio de la consulta:</strong> {{ $viewData['appointment']->getPrice() }}</p>
        <form method="POST" action="{{ route('appointment.delete', ['id' => $viewData['appointment']->getId()]) }}">
              @csrf
              @method('DELETE')
              <input type="submit" class="btn btn-danger" value="Eliminar" />
            </form>
      </div>
    </div>
  </div>
</div>
@endsection
