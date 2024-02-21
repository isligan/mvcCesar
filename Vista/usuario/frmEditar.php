<div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Editar</h6>
            <form method="POST" action="?controlador=usuario&accion=frmEditar"  onsubmit="return false">
                
                <div class="row">
                    <div class="col-lg-6">
                        <label for="nombre" class="form-label">Nombres</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Digite su nombre" value="<?php echo $this->infoUsuario["usu_nombres"]; ?>" required="">
                        
                    </div>
                     <div class="col-lg-6">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Digite su Apellido" value="<?php echo $this->infoUsuario["usu_apellidos"]; ?>" required="">
                    </div>

                     <div class="col-lg-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite su Email" value="<?php echo $this->infoUsuario["usu_email"]; ?>" required="">
                    </div>
                     

                     <div class="col-lg-6">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="number" class="form-control" id="telefono"  name="telefono" placeholder="Digite su Telefono" value="<?php echo $this->infoUsuario["usu_telefono"]; ?>" required="">
                    </div>

                     <div class="col-lg-6">
                        <label for="fecha_nac" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="fecha_nac"  name="fecha_nac" placeholder="" value="<?php echo $this->infoUsuario["usu_fch_nac"]; ?>" required="">
                    </div>

                    <div class="col-lg-2 mt-4">

                            <select name="rol" class="form-select" id="rol">
                                <option selected>Rol</option>
                                <option value="1">Administrador</option>
                                <option value="2">Secretaria</option>
                                <option value="3">Estudiante</option>
                            </select>
                    </div>
                </div> 
                <input type="hidden" name="uid" id="uid" value="<?php echo $this->infoUsuario["usu_uid"]; ?>">    
                <button type="submit" class="btn btn-primary mt-4" onclick="editar_usuario()">Editar</button>                
            </form>
        </div>     
</div>