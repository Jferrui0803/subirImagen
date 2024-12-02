@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <h1 class="card-title">{{ $subir->nombre_original }}</h1>
            </div>
            <div class="card-body text-center">
                <img src="{{ route('photos.view', $subir) }}" alt="{{ $subir->nombre_original }}" class="img-fluid rounded shadow-sm mb-4" style="max-width: 100%; height: auto;">
                <p><a href="{{ route('subir.index') }}" class="btn btn-secondary">Volver a la lista</a></p>
            </div>
        </div>
    </div>
@endsection