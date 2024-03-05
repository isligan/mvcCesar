<div class="container-fluid pt-4 px-4">

    <div class="row">
        <div class="col-lg-12">
            <h3>Administracion de Inscripciones</h3>
            <a href="?controlador=programa&accion=frmRegistrar" class="btn btn-primary">Registrar Programa</a>

        </div>
    </div>

</div>


<div class="container-fluid pt-4 px-4">

    <div class="row">
        <div class="col-lg-12">
            <div class="bg-light rounded p-4">
                <table class="table">
                    <tr>
                        <th>NOMBRE</th>
                        <th>CODIGO</th>
                        <th>SELECCIONAR</th>
                    </tr>
                    <?php
                        foreach($this->programa as $info) {
                            $uid = $info["pro_uid"];

                            echo"<tr>";
                            echo"<td>".$info["pro_nombre"]."</td>";
                            echo"<td>".$info["pro_codigo"]."</td>";

                            echo"<td><a class='btn btn-primary' href='?controlador=programa&accion=frmEditar&uid=$uid'>Editar </>";
                            echo" <a class='btn btn-danger' href='?controlador=programa&accion=eliminar&uid=$uid'> Eliminar</>
                            </td>";
                            echo"</tr>";
                        };
                    ?>

                </table>
            </div>

        </div>
    </div>

</div>