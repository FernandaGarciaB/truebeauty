<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cita</title>
    <link rel="stylesheet" href="{{ asset('css/formularioStyles.css') }}">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Editar Cita</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('appointments.update', $appointment->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nombre Cita</label>
                    <input type="text" id="name" name="name" value="{{ $appointment->name }}" placeholder="Enter your Name" required>
                </div>
                <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea id="description" name="description" placeholder="Enter your message">{{ $appointment->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="date">Fecha</label>
                    <input type="date" id="date" name="date" value="{{ $appointment->date }}" required>
                </div>
                <div class="form-group">
                    <label for="time">Hora</label>
                    <input type="time" id="time" name="time" value="{{ $appointment->time }}" required>
                </div>
                <button type="submit" class="submit-button">Actualizar</button>
            </form>
        </div>
    </div>
</body>
</html>
