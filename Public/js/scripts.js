let registrar_usuario =async()=>{
    let nombres = document.getElementById("nombres").value;
    let apellidos = document.getElementById("apellidos").value;
    let email = document.getElementById("email").value;
    let telefono = document.getElementById("telefono").value;
    let password = document.getElementById("password").value;
    let fecha_nac = document.getElementById("fecha_nac").value;

    if(nombres.trim()=="" && apellidos.trim()=="" && email.trim()=="" && telefono.trim()=="" && password.trim()=="" && fecha_nac.trim()==""){
        Swal.fire({position: "top-end", icon: "error", title: "Todos los campos son obligatorios",});
    }else{
        let url ='?controlador=usuario&accion=registrar';
        fd = new FormData();

        fd.append("nombres" , document.getElementById("nombres").value);
        fd.append("apellidos" , document.getElementById("apellidos").value);
        fd.append("email" , document.getElementById("email").value);
        fd.append("telefono" , document.getElementById("telefono").value);
        fd.append("password" , document.getElementById("password").value);
        fd.append("fecha_nac" , document.getElementById("fecha_nac").value);

        let respuesta = await fetch(url, {
            method:"post",
            body: fd
        });

        let info = await respuesta.json();
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: info.mensaje,
            showConfirmButton: false,
            timer: 1500
        });
        $('#frm')[0].reset();
    }
}

let editar_usuario =async()=>{
    let nombres = document.getElementById("nombres").value;
    let apellidos = document.getElementById("apellidos").value;
    let email = document.getElementById("email").value;
    let telefono = document.getElementById("telefono").value;
    let fecha_nac = document.getElementById("fecha_nac").value;

    if(nombres.trim()=="" && apellidos.trim()=="" && email.trim()=="" && telefono.trim()=="" && uid.trim()=="" && fecha_nac.trim()==""){
        Swal.fire({position: "top-end", icon: "error", title: "Todos los campos son obligatorios",});
    }else{
        let url ='?controlador=usuario&accion=editar';
        fd = new FormData();

        fd.append("nombres" , document.getElementById("nombres").value);
        fd.append("apellidos" , document.getElementById("apellidos").value);
        fd.append("email" , document.getElementById("email").value);
        fd.append("telefono" , document.getElementById("telefono").value);
        fd.append("uid" , document.getElementById("uid").value);
        fd.append("fecha_nac" , document.getElementById("fecha_nac").value);

        let respuesta = await fetch(url, {
            method:"post",
            body: fd
        });

        let info = await respuesta.json();
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: info.mensaje,
            showConfirmButton: false,
            timer: 1500
        });
        
    }
}
 
let registrarprograma =async()=>{
    let url ='?controlador=programa&accion=registrar';
    fd = new FormData();

    fd.append("nombre" , document.getElementById("nombre").value);
    fd.append("codigo" , document.getElementById("codigo").value);


    let respuesta = await fetch(url, {
        method:"post",
        body: fd
    });

    let info = await respuesta.json();
    Swal.fire({
        position: "top-end",
        icon: "success",
        title: info.mensaje,
        showConfirmButton: false,
        timer: 1500
      });
      $('#frm')[0].reset();
}

let validarUsuario =async()=>{
    let url = "?controlador=inicio&accion=validarUsuario";
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    if(email.trim()!="" && password.trim()!=""){
        let datos = new FormData();
        datos.append("email", email);
        datos.append("password", password)
        let respuesta = await fetch(url,{
            method:'post',
            body: datos
        });
        let info = await respuesta.json(); 
        if(info.estado == 1){
            window.location.href = "?controlador=inicio&accion=dashboard";
        }else{
            Swal.fire({icon:"error" , title:info.mensaje});
        }
    }else{
        Swal.fire({icon:"error" , title:"Todos los campos son obligatorios"});
    }
}

