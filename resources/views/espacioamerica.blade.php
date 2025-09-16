

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parqueadero 1 Las Américas - Espacios</title>
    <link rel="stylesheet" href="{{ asset('css/espacioamerica.css') }} ">
    <link rel="shortcut icon" href="https://cdn.sstatic.net/Sites/es/img/favicon.ico?v=a8def514be8a"> 
</head>
<body>
    <div class="cabecera">
    <a href="index.php?pagina=parqueadero" class="botonVolver">← Volver</a>
    <h1 style="font-weight: normal;">PARQUEADERO 1 LAS AMÉRICAS</h1>
    <p class="subtitulo">Sistema de Reservas e Información</p>
</div>
    <!-- Barra de navegación común para todas las páginas -->
    <div class="navegacion">
        <a href="index.php?pagina=parqueaderoamerica" class="botonNav">
            <span class="icono">ℹ️</span>
            Información
        </a>
        <a href="index.php?pagina=espacioamerica" class="botonNav activo">
            <span class="icono">🏢</span>
            Espacios
        </a>
        <a href="index.php?pagina=reservaamerica" class="botonNav">
            <span class="icono">📅</span>
            Reservar
        </a>
    </div>
    
    <!-- Contenido específico de la página de Espacios -->
    <div class="contenido">
        <h2 class="tituloSeccion">Mapa de Espacios</h2>
        
        <p class="instruccion">Seleccione un espacio disponible para reservarlo</p>
        
        <div class="contenedorNiveles">
            <div class="botonesNivel">
                <button class="botonNivel activo">Nivel 1</button>
                <button class="botonNivel">Nivel 2</button>
                <button class="botonNivel">Nivel 3</button>
            </div>
            
            <div class="mapaEspacios">
                <!-- Los espacios se cargarán dinámicamente con JavaScript -->
            </div>
        </div>
        
        <a href="/reservaamerica" class="boton-reservar" id="botonReservarEspacio">
            Reservar Espacio Seleccionado
        </a>
    </div>

    <script src="js/espacioamerica.js"></script>
</body>
</html>