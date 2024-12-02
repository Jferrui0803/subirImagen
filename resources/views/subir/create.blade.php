@extends('layouts.app')

@section('content')
    <div class="upload-container d-flex align-items-center justify-content-center">
        <div class="card upload-card">
            <div class="card-header text-center">
                <h2 class="card-title">Subir Imagen</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('subir.store') }}" method="POST" enctype="multipart/form-data" class="upload-form">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="file" class="form-label">Seleccionar Imagen</label>
                        <input type="file" class="form-control" id="file" name="file" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-custom">Subir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('styles')
<style>
        /* Global Container */
        .upload-container {
            min-height: 100vh;
            background: linear-gradient(135deg, #2c3e50, #34495e);
            padding: 20px;
        }

        /* Card Design */
        .upload-card {
            background: #f7f9fc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            overflow: hidden;
        }

        .card-header {
            background-color: #34495e;
            color: #ecf0f1;
            padding: 20px;
            border-bottom: 2px solid #2c3e50;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0;
        }

        .card-body {
            padding: 20px;
        }

        /* Form */
        .form-label {
            font-weight: bold;
            color: #2c3e50;
        }

        .form-control {
            border: 1px solid #dcdde1;
            border-radius: 5px;
            padding: 10px;
        }

        .form-control:focus {
            border-color: #34495e;
            box-shadow: 0 0 4px rgba(52, 73, 94, 0.5);
        }

        /* Button */
        .btn-custom {
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: #ffffff;
            font-size: 1rem;
            font-weight: bold;
            padding: 12px 24px;
            border-radius: 50px;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            text-transform: uppercase;
        }

        .btn-custom:hover {
            background: linear-gradient(135deg, #2980b9, #1a5276);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3);
            transform: translateY(-2px);
        }

        .btn-custom:active {
            background: linear-gradient(135deg, #1a5276, #2980b9);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            transform: translateY(0);
        }
    </style>
@endsection