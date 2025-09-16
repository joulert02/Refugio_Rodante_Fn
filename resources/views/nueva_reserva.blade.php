@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h3>Nueva Reserva</h3>
    <form action="{{ route('guardar_reserva') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="parqueadero_id" class="form-label">Parqueadero</label>
            <select id="parqueadero_id" name="parqueadero_id" class="form-control" required>
                <option value="">Seleccione un parqueadero</option>
                @foreach($parqueaderos as $parqueadero)
                    <option value="{{ $parqueadero->id }}">{{ $parqueadero->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="espacio_id" class="form-label">Espacio</label>
            <select id="espacio_id" name="espacio_id" class="form-control" required>
                <!-- Espacios cargados dinámicamente vía JS -->
            </select>
        </div>

        <div class="mb-3">
            <label for="fecha_inicio" class="form-label">Fecha Inicio</label>
            <input type="datetime-local" id="fecha_inicio" name="fecha_inicio" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="fecha_fin" class="form-label">Fecha Fin</label>
            <input type="datetime-local" id="fecha_fin" name="fecha_fin" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="placa_vehiculo" class="form-label">Placa Vehículo</label>
            <input type="text" id="placa_vehiculo" name="placa_vehiculo" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Reserva</button>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
