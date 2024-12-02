@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-success text-white">
                <h1 class="card-title">List of Photos</h1>
            </div>
            <div class="card-body">
                <a href="{{ route('subir.create') }}" class="btn btn-success mb-3">Add Images</a>
                @if($subirs->isEmpty())
                    <div class="alert alert-warning" role="alert">
                    No images uploaded. <a href="{{ route('subir.create') }}" class="alert-link">Upload Image</a>
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre Original</th>
                                    <th>Nombre</th>
                                    <th>Fecha</th>
                                    <th>Imagen</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($subirs as $subir)
                                    <tr>
                                        <td>{{ $subir->id }}</td>
                                        <td>{{ $subir->nombre_original }}</td>
                                        <td><a href="{{ route('subir.show', $subir->id) }}" class="text-decoration-none">{{ $subir->nombre }}</a></td>
                                        <td>{{ $subir->created_at->format('d/m/Y H:i:s') }}</td>
                                        <td>
                                            <img src="{{ route('photos.view', $subir) }}" alt="{{ $subir->nombre_original }}" class="img-thumbnail" style="max-width: 100px; height: auto;">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection