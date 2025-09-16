<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parqueadero 1 Las Américas</title>
    <link rel="stylesheet" href="{{ asset('css/reservaamerica.css') }}">
    <link rel="shortcut icon" href="https://cdn.sstatic.net/Sites/es/img/favicon.ico?v=a8def514be8a"> 
</head>
<body>

<div class="cabecera">
    <a href="/parqueadero" class="botonVolver">← Volver</a>
    <h1 style="font-weight: normal;">PARQUEADERO 1 LAS AMÉRICAS</h1>
    <p class="subtitulo">Sistema de Reservas e Información</p>
</div>

    <!-- Barra de navegación común para todas las páginas -->
    <div class="navegacion">
        <a href="/parqueaderoamerica" class="botonNav ">
            <span  class="icono">ℹ️</span>
            Información
        </a>
        <a href="/espacioamerica" class="botonNav">
            <span class="icono">🏢</span>
            Espacios
        </a>
        <a href="/reservaamerica" class="botonNav activo">
            <span class="icono">📅</span>
            Reservar
        </a>
    </div>

    <main>
        <div class="contenedor-reserva">
            <h2>Reservar Espacio</h2>

            <div class="contenedor-pasos">
                <div class="pasos">
                    <div class="paso" id="paso-indicador-1">
                        <span>1</span>
                    </div>
                    <div class="paso" id="paso-indicador-2">
                        <span>2</span>
                    </div>
                    <div class="paso" id="paso-indicador-3">
                        <span>3</span>
                    </div>
                </div>
            </div>

            <div class="contenedor-formulario" id="formularioReserva">
                <!-- Paso 1: Datos del Vehículo -->
                <div class="paso-formulario" id="paso1">
                    <h3>Datos del Vehículo</h3>
                    <div class="grupo-formulario">
                        <label>Espacio Seleccionado:</label>
                        <input type="text" id="espacioSeleccionado" readonly>
                    </div>
                    <div class="grupo-formulario">
                        <label>Tipo de Vehículo:</label>
                        <select id="vehiculo">
                            <option selected>Automóvil</option>
                            <option>Motocicleta</option>
                            <option>Camioneta</option>
                        </select>
                    </div>
                    <div class="grupo-formulario">
                        <label>Placa del Vehículo:</label>
                        <input type="text" id="placa" placeholder="Ingrese la placa" value="">
                    </div>
                    <div class="botones">
                        <button class="boton boton-atras">Atrás</button>
                        <button class="boton boton-siguiente">Siguiente</button>
                    </div>
                </div>

                <!-- Paso 2: Fecha y Hora -->
                <div class="paso-formulario" id="paso2">
                    <h3>Fecha y Hora</h3>
                    <div class="grupo-formulario">
                        <label>Fecha de Entrada:</label>
                        <input type="date" id="fecha">
                    </div>
                    <div class="grupo-formulario">
                        <label>Hora de Entrada:</label>
                        <input type="time" id="hora">
                    </div>
                    <div class="grupo-formulario">
                        <label>Duración Estimada:</label>
                        <select id="duracion">
                            <option selected>1 hora</option>
                            <option>2 horas</option>
                            <option>3 horas</option>
                            <option>4 horas</option>
                        </select>
                    </div>
                    <div class="botones">
                        <button class="boton boton-atras">Atrás</button>
                        <button class="boton boton-siguiente">Siguiente</button>
                    </div>
                </div>

                <!-- Paso 3: Información de Contacto -->
                <div class="paso-formulario" id="paso3">
                    <h3>Datos de Contacto</h3>
                    <div class="grupo-formulario">
                        <label>Nombre:</label>
                        <input type="text" id="nombre" placeholder="Ingrese su nombre">
                    </div>
                    <div class="grupo-formulario">
                        <label>Teléfono:</label>
                        <input type="tel" id="telefono" placeholder="Ingrese su teléfono">
                    </div>
                    <div class="grupo-formulario">
                        <label>Correo Electrónico:</label>
                        <input type="email" id="email" placeholder="Ingrese su correo">
                    </div>

                    <div class="resumen-reserva">
                        <h4>Resumen de la Reserva</h4>
                        <div class="fila-resumen">
                            <span class="etiqueta-resumen">Espacio:</span>
                            <span class="valor-resumen" id="resumen-espacio"></span>
                        </div>
                        <div class="fila-resumen">
                            <span class="etiqueta-resumen">Vehículo:</span>
                            <span class="valor-resumen" id="resumen-vehiculo"></span>
                        </div>
                        <div class="fila-resumen">
                            <span class="etiqueta-resumen">Fecha y Hora:</span>
                            <span class="valor-resumen" id="resumen-fecha-hora"></span>
                        </div>
                        <div class="fila-resumen">
                            <span class="etiqueta-resumen">Duración:</span>
                            <span class="valor-resumen" id="resumen-duracion"></span>
                        </div>
                    </div>

                    <div class="botones">
                        <button class="boton boton-atras">Atrás</button>
                        <button type="submit" class="boton boton-confirmar">Confirmar</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src=" {{ asset('js/reservaamerica.js') }}"></script>
</body>
</html>