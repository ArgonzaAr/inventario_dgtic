<?php 
    include(BD_SELECT . 'select-section.php');
    //Instancia de la clase SelectSection
    $section = new SelectSection();
    //Guardar información de secciones
    $infoSection = $section -> getSection();
?>
<h1 class="titulo">Administrar Secciones</h1>
    <div class="container text-container sombra">
        <table class="table tabla-sede">
            <thead class="encabezado">
                <tr>
                    <th>Área</th>
                    <th>Tipo</th>
                    <th>Estado</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($infoSection as $infoSection){
                ?>
                <tr>
                    <th><?php echo $infoSection['SeccionNombre']; ?></th>
                    <td><?php echo $infoSection['TipoSeccion']; ?></td>
                    <td><?php 
                        if($infoSection['EstadoSeccion'] == 1){
                            echo 'Activo';
                        }elseif($infoSection['EstadoSeccion'] == 0){
                            echo 'Inactivo';
                        }
                    ?></td>
                    <td class="btn-tabla-container">
                        <button type="button" class="btn btn-primary btn-tabla">Habilitar</button>
                        <button type="button" class="btn btn-primary btn-tabla">Deshabilitar</button>
                        <button type="button" class="btn btn-primary btn-tabla">Editar</button>
                        <button type="button" class="btn btn-primary btn-tabla">Eliminar</button>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="row" id="sectionDynamic"></div>
        <div class="container text-center">
            <div class="row justify-content-start">
                <div class="col-2 ">
                    <button type="button" id="addInput" class="btn btn-primary btn-tabla">Agregar Sección</button>
                </div>
            </div>
        </div>
    </div>
    <script src="/inventario_dgtic/view/js/dynamic_inputs/addSection.js"></script>