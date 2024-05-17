<?php include_once __DIR__ . '/../templates/header.php'; ?>

<div id="app" class="app">
    <nav class="tabs">
        <button class="actual" type="button" data-paso="1">Promotores</button>
        <button type="button" data-paso="2">Afiliados</button>
        <button type="button" data-paso="3">Resumén</button>
    </nav>

    <div id="paso-1" class="seccion-inicio">
        <h2>Promotores</h2>
        <p class="text-center">Selecciona un promotor</p>
        <div class="contenedor-buscador">
            <label for="buscador"></label>
            <i class='bx bx-search buscador'></i>

            <input type="text" id="buscador" name="buscador" placeholder="Buscar..." class="input-buscador">
        </div>
        <div id="promotores" class="listado-promotores"></div>
    </div> <!-- Fin Promotoeres -->

    <div id="paso-2" class="seccion-inicio">
        <h2>Afiliados</h2>
        <p class="text-center">Tabla de afiliados</p>
        <div class="contenedor-buscador">
            <label for="buscador"></label>
            <i class='bx bx-search buscador'></i>

            <input type="text" id="buscador-tabla" name="buscador-tabla" placeholder="Buscar..." class="input-buscador">
        </div>
        <div class="desborde">
            <table class="listado-afiliados tabla">
                <thead>
                    <tr>
                        <th>Estatus</th>
                        <th>Nombres</th>
                        <th>Ap</th>
                        <th>Am</th>
                        <th>Calle</th>
                        <th>NumExt</th>
                        <th>NumInt</th>
                        <th>Localidad</th>
                        <th>Teléfono</th>
                        <th>Fuente</th>
                        <th>Promotor</th>
                        <th>Seccional</th>
                        <th>Coordz</th>
                        <th>Sección</th>
                        <th>Ruta</th>
                        <th>Padrino</th>
                    </tr>
                </thead>
                <tbody id="afiliados"></tbody>
            </table>
        </div>
        <a name="abajo"></a>
        <a href="#arriba"><i class='bx bxs-up-arrow-circle abajo'></i></a>
    </div> <!-- Fin Afiliados -->

    <div id="paso-3" class="seccion-inicio">
        <h2>Resumén</h2>
        <p class="text-center">Verifica la información</p>
    </div>
</div>

<?php
$script = "
    <script src='build/js/app.js'></script>
"
?>