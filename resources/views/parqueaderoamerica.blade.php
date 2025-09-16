<!-- index.html (Página de Información) -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parqueadero 1 Las Américas - Información</title>
    <link rel="stylesheet" href="{{ asset('css/america.css') }} ">
    <link rel="shortcut icon" href="https://cdn.sstatic.net/Sites/es/img/favicon.ico?v=a8def514be8a"> 
</head>
<body>
<div class="cabecera">
    <a href="/parqueadero" class="botonVolver"   style="text-decoration: none;">← Volver</a>
    <h1 style="font-weight: normal;">PARQUEADERO 1 LAS AMÉRICAS</h1>
    <p class="subtitulo">Sistema de Reservas e Información</p>
</div>
    
    <!-- Barra de navegación común para todas las páginas -->
    <div class="navegacion">
        <a href="/parqueaderoamerica" class="botonNav activo">
            <span  class="icono">ℹ️</span>
            Información
        </a>
        <a href="/espacioamerica" class="botonNav">
            <span class="icono">🏢</span>
            Espacios
        </a>
        <a href="/reservaamerica" class="botonNav">
            <span class="icono">📅</span>
            Reservar
        </a>
    </div>
    
    <!-- Contenido específico de la página de Información -->
    <div class="contenido">
        <div class="tarjetasEstado">
            <div class="tarjeta">
                <div class="tituloTarjeta">Espacios Totales</div>
                <div class="total">50</div>
            </div>
            <div class="tarjeta">
                <div class="tituloTarjeta">Disponibles</div>
                <div class="disponibles">23</div>
            </div>
            <div class="tarjeta">
                <div class="tituloTarjeta">Ocupados</div>
                <div class="ocupados">27</div>
            </div>
            <div class="tarjeta">
                <div class="tituloTarjeta">Última Actualización</div>
                <div class="horaActualizacion">14:35</div>
            </div>
        </div>
        
        <div class="seccionInfo">
            <div class="cajaInfo">
                <h3 class="tituloInfo">Información del Parqueadero</h3>
                <div class="itemInfo">
                    <div class="iconoInfo"></div>
                    <span>Av. Las Américas #45-23, Bogotá</span>
                </div>
                <div class="itemInfo">
                    <div class="iconoInfo"></div>
                    <span>Abierto 24/7</span>
                </div>
                <div class="itemInfo">
                    <div class="iconoInfo"></div>
                    <span>(601) 123-4567</span>
                </div>
                <div class="itemInfo">
                    <div class="iconoInfo"></div>
                    <span>info@parqueaderoamericas.com</span>
                </div>
            </div>
            
            <div class="cajaInfo">
                <h3 class="tituloInfo">Tarifas</h3>
                <table class="tablaTarifas">
                    <tr>
                        <td>Hora o fracción</td>
                        <td>$3.500 COP</td>
                    </tr>
                    <tr>
                        <td>Día completo</td>
                        <td>$15.000 COP</td>
                    </tr>
                    <tr>
                        <td>Mensualidad</td>
                        <td>$180.000 COP</td>
                    </tr>
                </table>
            </div>
            
            <div class="cajaInfo">
                <h3 class="tituloInfo">Características</h3>
                <div class="itemInfo">
                    <span class="iconoCheck">✓</span>
                    <span>Vigilancia 24/7</span>
                </div>
                <div class="itemInfo">
                    <span class="iconoCheck">✓</span>
                    <span>Cámaras de seguridad</span>
                </div>
                <div class="itemInfo">
                    <span class="iconoCheck">✓</span>
                    <span>3 niveles</span>
                </div>
                <div class="itemInfo">
                    <span class="iconoCheck">✓</span>
                    <span>Espacios techados</span>
                </div>
                <div class="itemInfo">
                    <span class="iconoCheck">✓</span>
                    <span>Póliza de seguro incluida</span>
                </div>
                <div class="itemInfo">
                    <span class="iconoCheck">✓</span>
                    <span>Estación de carga eléctrica</span>
                </div>
            </div>
        </div>
        
        <a href="/espacioamerica" class="botonAccion">Espacios Disponibles</a>
    </div>

    <script src="{{ asset('js/america') }}"></script>
    
</body>
</html>





