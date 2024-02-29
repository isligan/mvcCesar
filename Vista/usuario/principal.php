<div class="container-fluid pt-4 px-4">

        <div class="row">
            <div class="col-lg-12">
                <h3>ADMINSTRACIÓN DE USUARIOS</h3>
                
                <a class="btn btn-primary" href="?controlador=usuario&accion=frmRegistrar">Registrar</a>
            </div>
        </div>
        <?php
        if($_SESSION['usu_rol']==1 or $_SESSION['usu_rol']==2 ){
            echo "<div class='row mt-4'>
                <div class='col-lg-12'>
                    <div class='bg-light rounded p-4'>
                        <h3>Reporte de Usuarios</h3>
                            <form action='?controlador=usuario&accion=reportePDF' method='POST' target='_blank'>
                            <div class='col-lg-1'>
                                <select name='rol' class='form-control'>
                                    <option value='1'>Admin</option>
                                    <option value='2'>Secretaria</option>
                                    <option value='3'>Estudiante</option>
                                </select>
                                </div> 
                                <input type='submit' name='aceptar' value='Generar reporte' class='btn btn-success mt-2'>
                            </form>
                    </div> 
                </div>
            </div>
            ";
        }
        ?>
</div>




<div class="container-fluid pt-4 px-4">

    <div class="row">
        <div class="col-lg-12">
            <div class="bg-light rounded p-4">
        
                <table class="table">
                    <tr>
                        <th>NOMBRE</th>
                        <th>APELLIDOS</th>
                        <th>CORREO</th>
                        <th>SELECCIONAR</th>
                        
                    </tr>
                    <?php
                        foreach($this->usuarios as $info) {
                            $uid = $info["usu_uid"];
                            echo"<tr>";
                            echo"<td>".$info["usu_nombres"]."</td>";
                            echo"<td>".$info["usu_apellidos"]."</td>";
                            echo"<td>".$info["usu_email"]."</td>";

                            
                            if($_SESSION['usu_rol']==1){

                                echo " <td><a href='?controlador=usuario&accion=frmEditar&uid=$uid'>Editar </a>";
                                echo" <a href='?controlador=usuario&accion=eliminar&uid=$uid'> Eliminar</a>
                                </td>";
                                echo "</tr>";

                        
                            }
                        
                        }
                    ?>

                </table>
            </div>

        </div>
    </div>

</div>