<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>

    <!-- Barra lateral de navegación -->
    <div class="sidebar">
        <h2><i class="titulo-sidebar"></i> Refugio Rodante</h2>
        <hr>
        <a href="/admin"><i class=" bi bi-house-door"></i> Inicio</a>
        <a href="/usuario"><i class="bi bi-people"></i> Usuarios</a>
        <a href="/reserva"><i class="bi bi-calendar-check"></i> Reservas</a>
        <a href="/configuracion" class="active"> <i class="bi bi-gear"></i> Configuración</a>
        <a href="/cerrarsesion"><i class="bi bi-box-arrow-right"></i> Cerrar Sesión</a>


        <div class="bottom-divider"></div>

        <!-- Perfil de usuario -->
        <div class="user-profile" onclick="toggleDropdown()">
            <img src="img/logo-polica.png" alt="Usuario">
            <span>Admin</span>
        </div>
       
    </div>
    </div>

    <!-- Contenido principal -->
    <div class="main-content">
        <h1>Bienvenido, Administrador</h1>

        <!-- Configuración -->
        <div class="card" id="configuracion">
            <h2>Configuración</h2>
            <p>Ajustes generales del sistema de parqueadero.</p>
            <table>
                <tr>
                    <th>Ajuste</th>
                    <th>Valor</th>
                    <th>Acción</th>
                </tr>
                <tr>
                    <td>Tarifa por Hora</td>
                    <td contenteditable="false">$5.00</td>
                    <td><button onclick="editarFila(this)">Editar</button></td>
                </tr>
                <tr>
                    <td>Horario de Atención</td>
                    <td contenteditable="false">7:00 AM - 9:00 PM</td>
                    <td><button onclick="editarFila(this)">Editar</button></td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="cerrarModal()">&times;</span>
            <h2>Editar Configuración</h2>
            <form id="form-edicion" onsubmit="guardarCambios(event)">
                <div class="form-group">
                    <label for="valor">Nuevo Valor:</label>
                    <input type="text" id="valor" name="valor" required>
                </div>
                <div class="form-group">
                    <button type="submit">Guardar Cambio </button>
                </div>
            </form>
        </div>
    </div>

    <script src="js/confi.js"></script>

</body>

</html>