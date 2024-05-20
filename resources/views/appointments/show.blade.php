<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Cita</title>
    <link rel="stylesheet" href="{{ asset('css/formularioStyles.css') }}">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Ver Cita</h2>

            <div class="form-group">
                <label for="name">Nombre Cita</label>
                <input type="text" id="name" name="name" value="{{ $appointment->name }}" disabled>
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea id="description" name="description" disabled>{{ $appointment->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="date">Fecha</label>
                <input type="date" id="date" name="date" value="{{ $appointment->date }}" disabled>
            </div>
            <div class="form-group">
                <label for="time">Hora</label>
                <input type="time" id="time" name="time" value="{{ $appointment->time }}" disabled>
            </div>
            <a href="{{ route('appointments.index') }}" class="btn btn-primary">Regresar</a>
        </div>
    </div>
</body>
</html>
