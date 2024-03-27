@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Agendar consulta</div>
          <div class="card-body">
            @if($errors->any())
            <ul id="errors" class="alert alert-danger list-unstyled">
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            @endif

            <form method="POST" action="{{ route('appointment.save') }}">
              @csrf
              <input type="text" class="form-control mb-2" placeholder="Ingresa duración de la consulta" name="duration" value="{{ old('duration') }}" />
              <input type="text" class="form-control mb-2" placeholder="Ingresa motivo consulta" name="reason" value="{{ old('reason') }}" />
              <input type="text" class="form-control mb-2" placeholder="Ingresa estado de la consulta" name="status" value="{{ old('status') }}" />
              <input type="text" class="form-control mb-2" placeholder="Ingresa modalidad de la consulta" name="modality" value="{{ old('modality') }}" />
              <input type="text" class="form-control mb-2" placeholder="Ingresa precio de la consulta" name="price" value="{{ old('price') }}" />
              <input type="submit" class="btn btn-primary" value="Send" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
