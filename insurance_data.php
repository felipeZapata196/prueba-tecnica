<?php
include("con_db.php");
$consulta = 'SElECT * FROM datos_contratacion';

$solicitudes = mysqli_query($conex, $consulta);
?>
<div class="row" style="padding-bottom: 10%;">
    <div class="col-12" style="padding-bottom: 5%; padding-top:2.5%;">
        <h1 class="text-center">Lista solicitudes polizas</h1>
    </div>
    <div class="col-12">

    </div>



    <form action="index.php" method="POST">
        Palabras clave
        <input type="text" id="busqueda" name="input" size="30" maxlength="30">
        <input type="submit" name="search" id="search" value="Buscar">
    </form>


    <div class="col-12" style="padding-bottom: 2%;">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>

                        <th>Nombre</th>
                        <th>Curso</th>
                        <th>Dni</th>
                        <th>Dni</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($solicitudes as $solicitud) { ?>
                        <tr>
                            <td>
                                <?php echo $solicitud->nombre ?>
                            </td>
                            <td>
                                <?php echo $solicitud->email ?>
                            </td>

                            <td>
                                <?php echo $solicitud->dni ?>
                            </td>
                            <td>
                                <?php echo $solicitud->dni ?>
                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>




    </div>
</div>