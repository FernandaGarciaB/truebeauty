<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cita</title>
    <link rel="stylesheet" href="{{ asset('css/formularioStyles.css') }}">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Reservar una cita</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('appointments.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre Cita</label>
                    <input type="text" id="name" name="name" placeholder="Agrega aquí el tipo de cita que quieres" required>
                </div>
                <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea id="description" name="description" placeholder="Da una descripción de tu cita, ejemplo: Cita para maquillaje de boda"></textarea>
                </div>
                <div class="form-group">
                    <label for="date">Fecha</label>
                    <input type="date" id="date" name="date" required>
                </div>
                <div class="form-group">
                    <label for="time">Hora</label>
                    <input type="time" id="time" name="time" required>
                </div>
                <button type="submit" class="submit-button">ENVIAR</button>
            </form>
        </div>
    </div>
</body>
</html>
