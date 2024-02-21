<div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Registrar de programa</h6>
            <form method="POST" action="?controlador=programa&accion=registrar" onsubmit="return false;">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="nombre" class="form-label">Nombre del Programa</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Digite Nombre del programa" required="">
                    </div>
                     <div class="col-lg-6">
                        <label for="apellidos" class="form-label">Código del programa</label>
                        <input type="number" class="form-control" id="codigo" name="codigo" placeholder="Diigte código del programa" required="">
                    </div>
                </div>     
                <button type="submit" class="btn btn-primary mt-4" onclick="registrarprograma()">Registrar</button>               
            </form>
        </div>     
</div>