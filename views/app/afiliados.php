<?php include_once __DIR__ . '/../templates/header.php'; ?>
<div class="app">
    <div class="seccion">
        <h2>Afiliados</h2>
        <p class="text-center">Afiliados por <?php echo $promotor; ?></p>


        <!-- Si no existen promotores se mostrara un mensaje -->
        <?php
        if ($alertas) {
            include_once __DIR__ . '/../templates/alertas.php';
        } else {
        ?>
            <div class="botones-arriba">
                <a href="/inicio"><i class='bx bxs-left-arrow-circle back'></i></a>
                <a href="#abajo"><i class='bx bxs-down-arrow-circle arriba'></i></a>
            </div>
            <div class="desborde">
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>Estatus</th>
                            <th>Nombre</th>
                            <th>Calle</th>
                            <th>NumExt</th>
                            <th>NumInt</th>
                            <th>Localidad</th>
                            <th>Teléfono</th>
                            <th>Fuente</th>
                            <th>Seccional</th>
                            <th>Coordz</th>
                            <th>Sección</th>
                            <th>Ruta</th>
                            <th>Padrino</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($afilidos as $afiliado) : ?>
                            <tr>
                                <td><?php echo $afiliado->estatus; ?></td>
                                <td><?php echo $afiliado->nombres; ?> <?php echo $afiliado->ap; ?> <?php echo $afiliado->am; ?></td>
                                <td><?php echo $afiliado->calle ? $afiliado->calle : '//'; ?></td>
                                <td><?php echo $afiliado->numext ? $afiliado->numext : '//'; ?></td>
                                <td><?php echo $afiliado->numint ? $afiliado->numint : '//'; ?> </td>
                                <td><?php echo $afiliado->localidad ? $afiliado->localidad : '//'; ?></td>
                                <td><?php echo $afiliado->telefono ? $afiliado->telefono : '//'; ?></td>
                                <td><?php echo $afiliado->fuente ? $afiliado->fuente : '//'; ?></td>
                                <td><?php echo $afiliado->seccional ? $afiliado->seccional : '//';; ?></td>
                                <td><?php echo $afiliado->coordz ? $afiliado->coordz : '//'; ?></td>
                                <td><?php echo $afiliado->seccion ? $afiliado->seccion : '//'; ?></td>
                                <td><?php echo $afiliado->ruta ? $afiliado->ruta : '//'; ?></td>
                                <td><?php echo $afiliado->padrino ? $afiliado->padrino : '//'; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php } ?>
        <a name="abajo"></a>
        <a href="#arriba"><i class='bx bxs-up-arrow-circle abajo'></i></a>
    </div>
</div>