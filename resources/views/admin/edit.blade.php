<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/formularioStyles.css') }}">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Editar Usuario</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" value="{{ $user->name }}" placeholder="Ingresa el nombre del usuario" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ $user->email }}" placeholder="Ingresa el email del usuario" required>
                </div>
                <div class="form-group">
                    <label for="role">Rol</label>
                    <select id="role" name="role" required>
                        <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Administrador</option>
                        <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>Usuario</option>
                    </select>
                </div>
                <button type="submit" class="submit-button">Actualizar</button>
            </form>
        </div>
    </div>
</body>
</html>
